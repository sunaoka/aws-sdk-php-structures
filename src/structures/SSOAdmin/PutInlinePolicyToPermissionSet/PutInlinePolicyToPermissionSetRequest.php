<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutInlinePolicyToPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property string $InlinePolicy
 */
class PutInlinePolicyToPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     PermissionSetArn: string,
     *     InlinePolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
