<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $description
 * @property string $name
 * @property string|null $policy
 * @property string $policyVersion
 * @property 'data' $type
 */
class UpdateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     description?: string|null,
     *     name: string,
     *     policy?: string|null,
     *     policyVersion: string,
     *     type: 'data'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
