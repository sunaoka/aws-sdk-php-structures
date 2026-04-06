<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\UpdateGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property string|null $Group
 * @property string|null $Description
 */
class UpdateGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string|null,
     *     Group?: string|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
