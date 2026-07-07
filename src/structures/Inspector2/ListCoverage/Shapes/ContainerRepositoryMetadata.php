<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $scanFrequency
 */
class ContainerRepositoryMetadata extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     scanFrequency?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
