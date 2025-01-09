<?php

namespace Sunaoka\Aws\Structures\Emr\SetVisibleToAllUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $JobFlowIds
 * @property bool $VisibleToAllUsers
 */
class SetVisibleToAllUsersRequest extends Request
{
    /**
     * @param array{
     *     JobFlowIds: list<string>,
     *     VisibleToAllUsers: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
