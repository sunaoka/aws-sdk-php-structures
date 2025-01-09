<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $name
 * @property string $policy
 * @property 'retention' $type
 */
class CreateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     name: string,
     *     policy: string,
     *     type: 'retention'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
