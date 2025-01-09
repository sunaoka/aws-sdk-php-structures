<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $name
 * @property string $policy
 * @property 'data' $type
 */
class CreateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     name: string,
     *     policy: string,
     *     type: 'data'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
