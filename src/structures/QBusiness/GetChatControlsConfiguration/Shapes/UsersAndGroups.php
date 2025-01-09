<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $userIds
 * @property list<string> $userGroups
 */
class UsersAndGroups extends Shape
{
    /**
     * @param array{
     *     userIds?: list<string>,
     *     userGroups?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
