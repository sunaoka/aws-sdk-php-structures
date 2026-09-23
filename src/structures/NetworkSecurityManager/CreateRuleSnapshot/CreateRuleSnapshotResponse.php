<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\CreateRuleSnapshot;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ruleId
 * @property string $ruleArn
 * @property string $ruleName
 * @property 'WAF' $firewallType
 * @property 'CONFIGURATION'|'INSPECTION'|null $ruleType
 * @property string|null $ruleDescription
 * @property Shapes\JsonDocument $configuration
 * @property 'DRAFT'|'ACTIVE'|'DISABLED' $status
 * @property string $version
 * @property string|null $updateToken
 * @property bool|null $isSnapshot
 * @property bool|null $hasPublishedVersion
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class CreateRuleSnapshotResponse extends Response
{
}
