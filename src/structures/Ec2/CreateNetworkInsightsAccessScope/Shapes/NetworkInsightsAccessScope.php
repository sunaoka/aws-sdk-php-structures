<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInsightsAccessScopeId
 * @property string $NetworkInsightsAccessScopeArn
 * @property \Aws\Api\DateTimeResult $CreatedDate
 * @property \Aws\Api\DateTimeResult $UpdatedDate
 * @property list<Tag> $Tags
 */
class NetworkInsightsAccessScope extends Shape
{
    /**
     * @param array{
     *     NetworkInsightsAccessScopeId?: string,
     *     NetworkInsightsAccessScopeArn?: string,
     *     CreatedDate?: \Aws\Api\DateTimeResult,
     *     UpdatedDate?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
