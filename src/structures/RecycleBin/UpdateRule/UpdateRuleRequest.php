<?php

namespace Sunaoka\Aws\Structures\RecycleBin\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property Shapes\RetentionPeriod $RetentionPeriod
 * @property string $Description
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE' $ResourceType
 * @property list<Shapes\ResourceTag> $ResourceTags
 * @property list<Shapes\ResourceTag> $ExcludeResourceTags
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     RetentionPeriod?: Shapes\RetentionPeriod,
     *     Description?: string,
     *     ResourceType?: 'EBS_SNAPSHOT'|'EC2_IMAGE',
     *     ResourceTags?: list<Shapes\ResourceTag>,
     *     ExcludeResourceTags?: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
