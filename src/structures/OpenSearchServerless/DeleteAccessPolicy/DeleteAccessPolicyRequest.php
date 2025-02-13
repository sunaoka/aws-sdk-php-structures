<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'data' $type
 * @property string $name
 * @property string|null $clientToken
 */
class DeleteAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'data',
     *     name: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
