<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\GetTimeOff;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $UserId
 * @property string $TimeOffId
 */
class GetTimeOffRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     UserId: string,
     *     TimeOffId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
