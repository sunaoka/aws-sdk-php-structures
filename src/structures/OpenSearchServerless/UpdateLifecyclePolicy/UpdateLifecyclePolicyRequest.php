<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'retention' $type
 * @property string $name
 * @property string $policyVersion
 * @property string|null $description
 * @property string|null $policy
 * @property string|null $clientToken
 */
class UpdateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'retention',
     *     name: string,
     *     policyVersion: string,
     *     description?: string|null,
     *     policy?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
