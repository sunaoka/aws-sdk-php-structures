<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchResetDevicesForUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property string $userId
 * @property list<string> $appIds
 * @property string|null $clientToken
 */
class BatchResetDevicesForUserRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     userId: string,
     *     appIds: list<string>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
