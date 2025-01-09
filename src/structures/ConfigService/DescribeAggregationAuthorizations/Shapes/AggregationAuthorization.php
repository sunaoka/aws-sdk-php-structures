<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregationAuthorizations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AggregationAuthorizationArn
 * @property string $AuthorizedAccountId
 * @property string $AuthorizedAwsRegion
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class AggregationAuthorization extends Shape
{
    /**
     * @param array{
     *     AggregationAuthorizationArn?: string,
     *     AuthorizedAccountId?: string,
     *     AuthorizedAwsRegion?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
