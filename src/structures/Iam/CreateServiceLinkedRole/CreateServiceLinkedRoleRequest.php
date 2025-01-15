<?php

namespace Sunaoka\Aws\Structures\Iam\CreateServiceLinkedRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AWSServiceName
 * @property string|null $Description
 * @property string|null $CustomSuffix
 */
class CreateServiceLinkedRoleRequest extends Request
{
    /**
     * @param array{
     *     AWSServiceName: string,
     *     Description?: string|null,
     *     CustomSuffix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
