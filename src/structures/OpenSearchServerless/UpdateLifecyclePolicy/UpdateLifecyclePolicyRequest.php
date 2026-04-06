<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $name
 * @property string|null $policy
 * @property string $policyVersion
 * @property 'retention' $type
 */
class UpdateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     name: string,
     *     policy?: string|null,
     *     policyVersion: string,
     *     type: 'retention'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
