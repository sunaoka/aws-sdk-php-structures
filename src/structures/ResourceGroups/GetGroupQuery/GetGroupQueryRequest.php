<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetGroupQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $Group
 */
class GetGroupQueryRequest extends Request
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
