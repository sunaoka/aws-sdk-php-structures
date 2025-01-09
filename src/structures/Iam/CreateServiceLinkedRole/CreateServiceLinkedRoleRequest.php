<?php

namespace Sunaoka\Aws\Structures\Iam\CreateServiceLinkedRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AWSServiceName
 * @property string $Description
 * @property string $CustomSuffix
 */
class CreateServiceLinkedRoleRequest extends Request
{
    /**
     * @param array{
     *     AWSServiceName: string,
     *     Description?: string,
     *     CustomSuffix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
