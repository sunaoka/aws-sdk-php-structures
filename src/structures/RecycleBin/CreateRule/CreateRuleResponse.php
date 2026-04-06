<?php

namespace Sunaoka\Aws\Structures\RecycleBin\CreateRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Identifier
 * @property Shapes\RetentionPeriod|null $RetentionPeriod
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE'|'EBS_VOLUME'|null $ResourceType
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 * @property 'pending'|'available'|null $Status
 * @property Shapes\LockConfiguration|null $LockConfiguration
 * @property 'locked'|'pending_unlock'|'unlocked'|null $LockState
 * @property string|null $RuleArn
 * @property list<Shapes\ResourceTag>|null $ExcludeResourceTags
 */
class CreateRuleResponse extends Response
{
}
