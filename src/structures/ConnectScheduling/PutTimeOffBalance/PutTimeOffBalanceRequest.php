<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\PutTimeOffBalance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $UserId
 * @property string $ShiftActivityId
 * @property Shapes\Duration $Balance
 */
class PutTimeOffBalanceRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     UserId: string,
     *     ShiftActivityId: string,
     *     Balance: Shapes\Duration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
