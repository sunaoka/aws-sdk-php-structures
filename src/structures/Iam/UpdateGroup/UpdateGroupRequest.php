<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $NewPath
 * @property string $NewGroupName
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     NewPath?: string,
     *     NewGroupName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
