<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchCreateUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property list<Shapes\BatchCreateUserRequestItem> $users
 * @property string|null $clientToken
 */
class BatchCreateUserRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     users: list<Shapes\BatchCreateUserRequestItem>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
