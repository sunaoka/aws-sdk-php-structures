<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionARN
 * @property 'DEVELOPMENT'|'LIVE' $Stage
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class FunctionMetadata extends Shape
{
    /**
     * @param array{
     *     FunctionARN: string,
     *     Stage?: 'DEVELOPMENT'|'LIVE',
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
