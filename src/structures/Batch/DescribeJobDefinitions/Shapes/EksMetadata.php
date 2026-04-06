<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $labels
 * @property array<string, string>|null $annotations
 * @property string|null $namespace
 */
class EksMetadata extends Shape
{
    /**
     * @param array{
     *     labels?: array<string, string>|null,
     *     annotations?: array<string, string>|null,
     *     namespace?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
