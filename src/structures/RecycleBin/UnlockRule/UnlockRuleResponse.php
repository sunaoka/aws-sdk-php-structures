<?php

namespace Sunaoka\Aws\Structures\RecycleBin\UnlockRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Identifier
 * @property string|null $Description
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE'|null $ResourceType
 * @property Shapes\RetentionPeriod|null $RetentionPeriod
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 * @property 'pending'|'available'|null $Status
 * @property Shapes\LockConfiguration|null $LockConfiguration
 * @property 'locked'|'pending_unlock'|'unlocked'|null $LockState
 * @property \Aws\Api\DateTimeResult|null $LockEndTime
 * @property string|null $RuleArn
 * @property list<Shapes\ResourceTag>|null $ExcludeResourceTags
 */
class UnlockRuleResponse extends Response
{
}
