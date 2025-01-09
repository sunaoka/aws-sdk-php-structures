<?php

namespace Sunaoka\Aws\Structures\RecycleBin\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property 'EBS_SNAPSHOT'|'EC2_IMAGE' $ResourceType
 * @property list<Shapes\ResourceTag> $ResourceTags
 * @property 'locked'|'pending_unlock'|'unlocked' $LockState
 * @property list<Shapes\ResourceTag> $ExcludeResourceTags
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     ResourceType: 'EBS_SNAPSHOT'|'EC2_IMAGE',
     *     ResourceTags?: list<Shapes\ResourceTag>,
     *     LockState?: 'locked'|'pending_unlock'|'unlocked',
     *     ExcludeResourceTags?: list<Shapes\ResourceTag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
