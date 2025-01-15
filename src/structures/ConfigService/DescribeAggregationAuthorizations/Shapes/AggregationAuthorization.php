<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeAggregationAuthorizations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AggregationAuthorizationArn
 * @property string|null $AuthorizedAccountId
 * @property string|null $AuthorizedAwsRegion
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class AggregationAuthorization extends Shape
{
    /**
     * @param array{
     *     AggregationAuthorizationArn?: string|null,
     *     AuthorizedAccountId?: string|null,
     *     AuthorizedAwsRegion?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
