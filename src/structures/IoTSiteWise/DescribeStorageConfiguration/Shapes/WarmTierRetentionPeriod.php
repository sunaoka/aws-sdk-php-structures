<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $numberOfDays
 * @property bool $unlimited
 */
class WarmTierRetentionPeriod extends Shape
{
    /**
     * @param array{
     *     numberOfDays?: int,
     *     unlimited?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
