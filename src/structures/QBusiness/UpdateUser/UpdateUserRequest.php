<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $userId
 * @property list<Shapes\UserAlias>|null $userAliasesToUpdate
 * @property list<Shapes\UserAlias>|null $userAliasesToDelete
 */
class UpdateUserRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     userId: string,
     *     userAliasesToUpdate?: list<Shapes\UserAlias>|null,
     *     userAliasesToDelete?: list<Shapes\UserAlias>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
