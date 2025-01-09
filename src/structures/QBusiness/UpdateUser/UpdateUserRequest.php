<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $userId
 * @property list<Shapes\UserAlias> $userAliasesToUpdate
 * @property list<Shapes\UserAlias> $userAliasesToDelete
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     userId: string,
     *     userAliasesToUpdate?: list<Shapes\UserAlias>,
     *     userAliasesToDelete?: list<Shapes\UserAlias>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
