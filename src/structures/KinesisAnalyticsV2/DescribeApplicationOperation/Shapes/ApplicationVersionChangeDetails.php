<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 999999999> $ApplicationVersionUpdatedFrom
 * @property int<1, 999999999> $ApplicationVersionUpdatedTo
 */
class ApplicationVersionChangeDetails extends Shape
{
    /**
     * @param array{
     *     ApplicationVersionUpdatedFrom: int<1, 999999999>,
     *     ApplicationVersionUpdatedTo: int<1, 999999999>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
