<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling;

class ConnectSchedulingClient extends \Aws\ConnectScheduling\ConnectSchedulingClient
{
    use ApproveTimeOff\ApproveTimeOffTrait;
    use CancelTimeOff\CancelTimeOffTrait;
    use CreateTimeOff\CreateTimeOffTrait;
    use GetTimeOff\GetTimeOffTrait;
    use PutTimeOffBalance\PutTimeOffBalanceTrait;
    use RejectTimeOff\RejectTimeOffTrait;
}
