<?php

namespace Sunaoka\Aws\Structures\RecycleBin\UpdateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Identifier
 * @property Shapes\RetentionPeriod $RetentionPeriod
 * @property string $Description
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE' $ResourceType
 * @property list<Shapes\ResourceTag> $ResourceTags
 * @property 'pending'|'available' $Status
 * @property 'locked'|'pending_unlock'|'unlocked' $LockState
 * @property \Aws\Api\DateTimeResult $LockEndTime
 * @property string $RuleArn
 * @property list<Shapes\ResourceTag> $ExcludeResourceTags
 */
class UpdateRuleResponse extends Response
{
}
