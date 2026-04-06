<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'data' $type
 * @property string $name
 * @property string $policyVersion
 * @property string|null $description
 * @property string|null $policy
 * @property string|null $clientToken
 */
class UpdateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'data',
     *     name: string,
     *     policyVersion: string,
     *     description?: string|null,
     *     policy?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
