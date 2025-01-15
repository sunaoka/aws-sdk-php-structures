<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInsightsAccessScopes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInsightsAccessScopeId
 * @property string|null $NetworkInsightsAccessScopeArn
 * @property \Aws\Api\DateTimeResult|null $CreatedDate
 * @property \Aws\Api\DateTimeResult|null $UpdatedDate
 * @property list<Tag>|null $Tags
 */
class NetworkInsightsAccessScope extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeId?: string|null,
     *     NetworkInsightsAccessScopeArn?: string|null,
     *     CreatedDate?: \Aws\Api\DateTimeResult|null,
     *     UpdatedDate?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
