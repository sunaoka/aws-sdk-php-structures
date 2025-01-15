<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListMilestones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProfileArn
 * @property string|null $ProfileVersion
 */
class WorkloadProfile extends Shape
{
    /**
     * @param array{
     *     ProfileArn?: string|null,
     *     ProfileVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
