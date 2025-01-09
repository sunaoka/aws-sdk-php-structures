<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $Group
 */
class GetGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName?: string,
     *     Group?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
