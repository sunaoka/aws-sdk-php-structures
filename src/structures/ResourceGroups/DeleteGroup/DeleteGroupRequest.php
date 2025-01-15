<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\DeleteGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property string|null $Group
 */
class DeleteGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     Group?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
