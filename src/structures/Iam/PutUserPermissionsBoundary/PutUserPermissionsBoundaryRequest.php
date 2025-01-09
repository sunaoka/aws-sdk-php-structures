<?php

namespace Sunaoka\Aws\Structures\Iam\PutUserPermissionsBoundary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $PermissionsBoundary
 */
class PutUserPermissionsBoundaryRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     PermissionsBoundary: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
