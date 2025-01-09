<?php

namespace Sunaoka\Aws\Structures\RecycleBin\CreateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Identifier
 * @property Shapes\RetentionPeriod $RetentionPeriod
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE' $ResourceType
 * @property list<Shapes\ResourceTag> $ResourceTags
 * @property 'pending'|'available' $Status
 * @property Shapes\LockConfiguration $LockConfiguration
 * @property 'locked'|'pending_unlock'|'unlocked' $LockState
 * @property string $RuleArn
 * @property list<Shapes\ResourceTag> $ExcludeResourceTags
 */
class CreateRuleResponse extends Response
{
}
