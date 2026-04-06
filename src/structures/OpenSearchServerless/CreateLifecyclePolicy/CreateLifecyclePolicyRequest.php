<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'retention' $type
 * @property string $name
 * @property string|null $description
 * @property string $policy
 * @property string|null $clientToken
 */
class CreateLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'retention',
     *     name: string,
     *     description?: string|null,
     *     policy: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
