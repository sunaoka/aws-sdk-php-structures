<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeResourcePolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $policyName
 * @property string|null $policyDocument
 * @property int<0, max>|null $lastUpdatedTime
 * @property 'ACCOUNT'|'RESOURCE'|null $policyScope
 * @property string|null $resourceArn
 * @property string|null $revisionId
 */
class ResourcePolicy extends Shape
{
    /**
     * @param array{
     *     policyName?: string|null,
     *     policyDocument?: string|null,
     *     lastUpdatedTime?: int<0, max>|null,
     *     policyScope?: 'ACCOUNT'|'RESOURCE'|null,
     *     resourceArn?: string|null,
     *     revisionId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
