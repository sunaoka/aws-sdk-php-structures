<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $classification
 * @property array<string, string> $properties
 * @property list<Configuration> $configurations
 */
class Configuration extends Shape
{
    /**
     * @param array{
     *     classification: string,
     *     properties?: array<string, string>,
     *     configurations?: list<Configuration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
