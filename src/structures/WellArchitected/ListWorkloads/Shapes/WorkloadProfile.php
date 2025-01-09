<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListWorkloads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileArn
 * @property string $ProfileVersion
 */
class WorkloadProfile extends Shape
{
    /**
     * @param array{
     *     ProfileArn?: string,
     *     ProfileVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
