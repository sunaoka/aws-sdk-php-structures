<?php

namespace Sunaoka\Aws\Structures\RecycleBin\UpdateRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property Shapes\RetentionPeriod|null $RetentionPeriod
 * @property string|null $Description
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE'|null $ResourceType
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 * @property list<Shapes\ResourceTag>|null $ExcludeResourceTags
 */
class UpdateRuleRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     RetentionPeriod?: Shapes\RetentionPeriod|null,
     *     Description?: string|null,
     *     ResourceType?: 'EBS_SNAPSHOT'|'EC2_IMAGE'|null,
     *     ResourceTags?: list<Shapes\ResourceTag>|null,
     *     ExcludeResourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
