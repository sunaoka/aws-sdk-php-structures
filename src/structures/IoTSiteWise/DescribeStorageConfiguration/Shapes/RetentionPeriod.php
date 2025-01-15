<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<30, max>|null $numberOfDays
 * @property bool|null $unlimited
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     numberOfDays?: int<30, max>|null,
     *     unlimited?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
