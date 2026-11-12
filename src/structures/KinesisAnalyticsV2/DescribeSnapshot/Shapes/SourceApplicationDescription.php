<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationName
 * @property \Aws\Api\DateTimeResult $ApplicationCreationTimestamp
 * @property int<1, 999999999> $ApplicationVersionId
 */
class SourceApplicationDescription extends Shape
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     ApplicationCreationTimestamp: \Aws\Api\DateTimeResult,
     *     ApplicationVersionId: int<1, 999999999>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
