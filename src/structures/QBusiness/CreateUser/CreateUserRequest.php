<?php

namespace Sunaoka\Aws\Structures\QBusiness\CreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $userId
 * @property list<Shapes\UserAlias> $userAliases
 * @property string $clientToken
 */
class CreateUserRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     userId: string,
     *     userAliases?: list<Shapes\UserAlias>,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
