<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\PutPermissionsBoundaryToPermissionSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $PermissionSetArn
 * @property Shapes\PermissionsBoundary $PermissionsBoundary
 */
class PutPermissionsBoundaryToPermissionSetRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     PermissionSetArn: string,
     *     PermissionsBoundary: Shapes\PermissionsBoundary
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
