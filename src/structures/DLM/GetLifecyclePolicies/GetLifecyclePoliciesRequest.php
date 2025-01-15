<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $PolicyIds
 * @property 'ENABLED'|'DISABLED'|'ERROR'|null $State
 * @property list<'VOLUME'|'INSTANCE'>|null $ResourceTypes
 * @property list<string>|null $TargetTags
 * @property list<string>|null $TagsToAdd
 * @property 'VOLUME'|'INSTANCE'|'ALL'|null $DefaultPolicyType
 */
class GetLifecyclePoliciesRequest extends Request
{
    /**
     * @param array{
     *     PolicyIds?: list<string>|null,
     *     State?: 'ENABLED'|'DISABLED'|'ERROR'|null,
     *     ResourceTypes?: list<'VOLUME'|'INSTANCE'>|null,
     *     TargetTags?: list<string>|null,
     *     TagsToAdd?: list<string>|null,
     *     DefaultPolicyType?: 'VOLUME'|'INSTANCE'|'ALL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
