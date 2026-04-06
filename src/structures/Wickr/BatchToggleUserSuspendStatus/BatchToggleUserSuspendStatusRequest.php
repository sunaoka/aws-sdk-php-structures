<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchToggleUserSuspendStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $networkId
 * @property bool $suspend
 * @property list<string> $userIds
 * @property string|null $clientToken
 */
class BatchToggleUserSuspendStatusRequest extends Request
{
    /**
     * @param array{
     *     networkId: string,
     *     suspend: bool,
     *     userIds: list<string>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
