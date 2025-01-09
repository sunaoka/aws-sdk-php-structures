<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PolicyIds
 * @property 'ENABLED'|'DISABLED'|'ERROR' $State
 * @property list<'VOLUME'|'INSTANCE'> $ResourceTypes
 * @property list<string> $TargetTags
 * @property list<string> $TagsToAdd
 * @property 'VOLUME'|'INSTANCE'|'ALL' $DefaultPolicyType
 */
class GetLifecyclePoliciesRequest extends Request
{
    /**
     * @param array{
     *     PolicyIds?: list<string>,
     *     State?: 'ENABLED'|'DISABLED'|'ERROR',
     *     ResourceTypes?: list<'VOLUME'|'INSTANCE'>,
     *     TargetTags?: list<string>,
     *     TagsToAdd?: list<string>,
     *     DefaultPolicyType?: 'VOLUME'|'INSTANCE'|'ALL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
