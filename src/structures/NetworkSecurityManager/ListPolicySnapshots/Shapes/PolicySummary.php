<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListPolicySnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyId
 * @property string $policyArn
 * @property string|null $policyName
 * @property 'DRAFT'|'ACTIVE'|'DISABLED'|null $status
 * @property string|null $version
 * @property bool|null $hasPublishedVersion
 * @property 'WAF'|'SHIELD_ADVANCED'|null $firewallType
 * @property int<1, max>|null $priority
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class PolicySummary extends Shape
{
    /**
     * @param array{
     *     policyId: string,
     *     policyArn: string,
     *     policyName?: string|null,
     *     status?: 'DRAFT'|'ACTIVE'|'DISABLED'|null,
     *     version?: string|null,
     *     hasPublishedVersion?: bool|null,
     *     firewallType?: 'WAF'|'SHIELD_ADVANCED'|null,
     *     priority?: int<1, max>|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
