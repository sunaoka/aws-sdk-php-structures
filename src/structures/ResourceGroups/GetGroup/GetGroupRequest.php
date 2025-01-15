<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GroupName
 * @property string|null $Group
 */
class GetGroupRequest extends Request
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
