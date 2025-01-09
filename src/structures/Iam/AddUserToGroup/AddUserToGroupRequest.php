<?php

namespace Sunaoka\Aws\Structures\Iam\AddUserToGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $UserName
 */
class AddUserToGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     UserName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
