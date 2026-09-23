<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyId
 * @property string $policyArn
 * @property string $policyName
 * @property string|null $policyDescription
 * @property 'DRAFT'|'ACTIVE'|'DISABLED' $status
 * @property int<1, max> $priority
 * @property list<Shapes\AssociatedTemplateOrRule> $associatedTemplateAndRuleList
 * @property string $version
 * @property string|null $updateToken
 * @property bool|null $isSnapshot
 * @property bool|null $hasPublishedVersion
 * @property 'WAF'|'SHIELD_ADVANCED' $firewallType
 * @property Shapes\PolicyConfiguration|null $policyConfiguration
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetPolicyResponse extends Response
{
}
