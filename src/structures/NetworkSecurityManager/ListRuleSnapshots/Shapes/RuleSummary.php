<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListRuleSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleId
 * @property string $ruleArn
 * @property string $ruleName
 * @property 'WAF'|null $firewallType
 * @property 'CONFIGURATION'|'INSPECTION'|null $ruleType
 * @property 'DRAFT'|'ACTIVE'|'DISABLED'|null $status
 * @property string|null $version
 * @property bool|null $hasPublishedVersion
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     ruleId: string,
     *     ruleArn: string,
     *     ruleName: string,
     *     firewallType?: 'WAF'|null,
     *     ruleType?: 'CONFIGURATION'|'INSPECTION'|null,
     *     status?: 'DRAFT'|'ACTIVE'|'DISABLED'|null,
     *     version?: string|null,
     *     hasPublishedVersion?: bool|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
