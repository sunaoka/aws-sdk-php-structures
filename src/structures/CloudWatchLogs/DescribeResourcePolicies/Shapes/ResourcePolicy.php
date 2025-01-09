<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeResourcePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyName
 * @property string $policyDocument
 * @property int<0, max> $lastUpdatedTime
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     policyName?: string,
     *     policyDocument?: string,
     *     lastUpdatedTime?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
