<?php

declare(strict_types=1);

namespace Icanhazstring\Composer\Unused\Console\Command;

use Icanhazstring\Composer\Unused\Command\Handler\CollectConsumedSymbolsCommandHandler;
use Icanhazstring\Composer\Unused\Command\Handler\CollectFilteredDependenciesCommandHandler;
use Icanhazstring\Composer\Unused\Command\Handler\CollectRequiredDependenciesCommandHandler;
use Psr\Container\ContainerInterface;

final class UnusedCommandFactory
{
    public function __invoke(ContainerInterface $container): UnusedCommand
    {
        return new UnusedCommand(
            $container->get(CollectConsumedSymbolsCommandHandler::class),
            $container->get(CollectRequiredDependenciesCommandHandler::class),
            $container->get(CollectFilteredDependenciesCommandHandler::class),
        );
    }
}
