<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $userId
 * @property list<Shapes\UserAlias>|null $userAliases
 * @property string|null $clientToken
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     userId: string,
     *     userAliases?: list<Shapes\UserAlias>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
