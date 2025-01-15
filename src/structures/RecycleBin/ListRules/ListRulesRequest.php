<?php

namespace Sunaoka\Aws\Structures\RecycleBin\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE' $ResourceType
 * @property list<Shapes\ResourceTag>|null $ResourceTags
 * @property 'locked'|'pending_unlock'|'unlocked'|null $LockState
 * @property list<Shapes\ResourceTag>|null $ExcludeResourceTags
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     ResourceType: 'EBS_SNAPSHOT'|'EC2_IMAGE',
     *     ResourceTags?: list<Shapes\ResourceTag>|null,
     *     LockState?: 'locked'|'pending_unlock'|'unlocked'|null,
     *     ExcludeResourceTags?: list<Shapes\ResourceTag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
