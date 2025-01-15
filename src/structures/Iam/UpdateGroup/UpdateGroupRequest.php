<?php

namespace Sunaoka\Aws\Structures\Iam\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string|null $NewPath
 * @property string|null $NewGroupName
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     NewPath?: string|null,
     *     NewGroupName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
