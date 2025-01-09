<?php

namespace Sunaoka\Aws\Structures\Connect\PutUserStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserId
 * @property string $InstanceId
 * @property string $AgentStatusId
 */
class PutUserStatusRequest extends Request
{
    /**
     * @param array{
     *     UserId: string,
     *     InstanceId: string,
     *     AgentStatusId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
