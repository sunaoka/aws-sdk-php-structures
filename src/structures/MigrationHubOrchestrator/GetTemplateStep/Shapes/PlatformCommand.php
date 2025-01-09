<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplateStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $linux
 * @property string $windows
 */
class PlatformCommand extends Shape
{
    /**
     * @param array{
     *     linux?: string,
     *     windows?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
