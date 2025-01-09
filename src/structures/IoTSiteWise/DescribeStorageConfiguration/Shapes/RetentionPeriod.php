<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<30, max> $numberOfDays
 * @property bool $unlimited
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     numberOfDays?: int<30, max>,
     *     unlimited?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
