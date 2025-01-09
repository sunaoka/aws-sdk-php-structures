<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ApplicationVersionUpdatedFrom
 * @property int $ApplicationVersionUpdatedTo
 */
class ApplicationVersionChangeDetails extends Shape
{
    /**
     * @param array{
     *     ApplicationVersionUpdatedFrom: int,
     *     ApplicationVersionUpdatedTo: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
