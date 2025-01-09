<?php

namespace Sunaoka\Aws\Structures\MediaStore\GetMetricPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ObjectGroup
 * @property string $ObjectGroupName
 */
class MetricPolicyRule extends Shape
{
    /**
     * @param array{
     *     ObjectGroup: string,
     *     ObjectGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
