<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $name
 * @property string $policy
 * @property string $policyVersion
 * @property 'data' $type
 */
class UpdateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     name: string,
     *     policy?: string,
     *     policyVersion: string,
     *     type: 'data'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
