<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property 'retention' $type
 */
class DeleteLifecyclePolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     type: 'retention'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
