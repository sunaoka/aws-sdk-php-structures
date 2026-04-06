<?php

namespace Sunaoka\Aws\Structures\RecycleBin\UpdateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Identifier
 * @property Shapes\RetentionPeriod|null $RetentionPeriod
 * @property string|null $Description
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE'|'EBS_VOLUME'|null $ResourceType
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 * @property 'pending'|'available'|null $Status
 * @property 'locked'|'pending_unlock'|'unlocked'|null $LockState
 * @property \Aws\Api\DateTimeResult|null $LockEndTime
 * @property string|null $RuleArn
 * @property list<Shapes\ResourceTag>|null $ExcludeResourceTags
 */
class UpdateRuleResponse extends Response
{
}
