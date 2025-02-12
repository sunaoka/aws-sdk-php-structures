<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'retention' $type
 * @property string $name
 * @property string|null $clientToken
 */
class DeleteLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'retention',
     *     name: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
