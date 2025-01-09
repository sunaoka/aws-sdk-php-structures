<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Family
 * @property string $Name
 * @property string $Version
 */
class ReportedOs extends Shape
{
    /**
     * @param array{
     *     Family?: string,
     *     Name?: string,
     *     Version?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
