<?php

namespace Sunaoka\Aws\Structures\RecycleBin\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RetentionPeriod $RetentionPeriod
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE' $ResourceType
 * @property list<Shapes\ResourceTag> $ResourceTags
 * @property Shapes\LockConfiguration $LockConfiguration
 * @property list<Shapes\ResourceTag> $ExcludeResourceTags
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     RetentionPeriod: Shapes\RetentionPeriod,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>,
     *     ResourceType: 'EBS_SNAPSHOT'|'EC2_IMAGE',
     *     ResourceTags?: list<Shapes\ResourceTag>,
     *     LockConfiguration?: Shapes\LockConfiguration,
     *     ExcludeResourceTags?: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
