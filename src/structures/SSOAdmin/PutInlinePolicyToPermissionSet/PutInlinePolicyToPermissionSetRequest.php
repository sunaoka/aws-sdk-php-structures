<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutInlinePolicyToPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InlinePolicy
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 */
class PutInlinePolicyToPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InlinePolicy: string,
     *     InstanceArn: string,
     *     PermissionSetArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
