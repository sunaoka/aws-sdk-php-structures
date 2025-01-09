<?php

namespace Sunaoka\Aws\Structures\RAM\PromotePermissionCreatedFromPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $permissionArn
 * @property string $name
 * @property string $clientToken
 */
class PromotePermissionCreatedFromPolicyRequest extends Request
{
    /**
     * @param array{
     *     permissionArn: string,
     *     name: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
