<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\RejectTimeOff;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $UserId
 * @property string $TimeOffId
 * @property string|null $Description
 */
class RejectTimeOffRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     UserId: string,
     *     TimeOffId: string,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
