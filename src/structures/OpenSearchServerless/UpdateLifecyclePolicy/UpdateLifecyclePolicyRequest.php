<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $name
 * @property string $policy
 * @property string $policyVersion
 * @property 'retention' $type
 */
class UpdateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     name: string,
     *     policy?: string,
     *     policyVersion: string,
     *     type: 'retention'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
