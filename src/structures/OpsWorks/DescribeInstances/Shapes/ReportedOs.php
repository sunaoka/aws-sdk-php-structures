<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Family
 * @property string|null $Name
 * @property string|null $Version
 */
class ReportedOs extends Shape
{
    /**
     * @param array{
     *     Family?: string|null,
     *     Name?: string|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
