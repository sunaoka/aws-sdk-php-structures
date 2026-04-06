<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateMetricSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIdList
 * @property list<string> $SecurityGroupIdList
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{
     *     SubnetIdList: list<string>,
     *     SecurityGroupIdList: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
