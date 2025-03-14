<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $numberOfDays
 * @property bool|null $unlimited
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     numberOfDays?: int|null,
     *     unlimited?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
