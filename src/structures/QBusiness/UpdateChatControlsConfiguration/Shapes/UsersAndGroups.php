<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $userIds
 * @property list<string>|null $userGroups
 */
class UsersAndGroups extends Shape
{
    /**
     * @param array{
     *     userIds?: list<string>|null,
     *     userGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
