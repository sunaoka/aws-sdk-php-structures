<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property 'data' $type
 */
class DeleteAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     type: 'data'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
