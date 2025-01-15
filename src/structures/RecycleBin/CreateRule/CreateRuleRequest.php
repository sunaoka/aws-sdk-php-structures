<?php

namespace Sunaoka\Aws\Structures\RecycleBin\CreateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\RetentionPeriod $RetentionPeriod
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE' $ResourceType
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 * @property Shapes\LockConfiguration|null $LockConfiguration
 * @property list<Shapes\ResourceTag>|null $ExcludeResourceTags
 */
class CreateRuleRequest extends Request
{
    /**
     * @param array{
     *     RetentionPeriod: Shapes\RetentionPeriod,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ResourceType: 'EBS_SNAPSHOT'|'EC2_IMAGE',
     *     ResourceTags?: list<Shapes\ResourceTag>|null,
     *     LockConfiguration?: Shapes\LockConfiguration|null,
     *     ExcludeResourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
