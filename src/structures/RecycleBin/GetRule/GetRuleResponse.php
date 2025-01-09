<?php

namespace Sunaoka\Aws\Structures\RecycleBin\GetRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Identifier
 * @property string $Description
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE' $ResourceType
 * @property Shapes\RetentionPeriod $RetentionPeriod
 * @property list<Shapes\ResourceTag> $ResourceTags
 * @property 'pending'|'available' $Status
 * @property Shapes\LockConfiguration $LockConfiguration
 * @property 'locked'|'pending_unlock'|'unlocked' $LockState
 * @property \Aws\Api\DateTimeResult $LockEndTime
 * @property string $RuleArn
 * @property list<Shapes\ResourceTag> $ExcludeResourceTags
 */
class GetRuleResponse extends Response
{
}
