<?php

namespace Sunaoka\Aws\Structures\MigrationHubOrchestrator\GetTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $url
 */
class Tool extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     url?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
