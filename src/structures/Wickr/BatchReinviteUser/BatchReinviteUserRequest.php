<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchReinviteUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property list<string> $userIds
 * @property string|null $clientToken
 */
class BatchReinviteUserRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     userIds: list<string>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
