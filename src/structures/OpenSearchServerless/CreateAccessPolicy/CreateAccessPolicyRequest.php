<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'data' $type
 * @property string $name
 * @property string|null $description
 * @property string $policy
 * @property string|null $clientToken
 */
class CreateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'data',
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
