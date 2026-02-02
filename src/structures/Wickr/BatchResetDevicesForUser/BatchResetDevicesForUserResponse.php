<?php

namespace Sunaoka\Aws\Structures\Wickr\BatchResetDevicesForUser;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $message
 * @property list<Shapes\BatchDeviceSuccessResponseItem>|null $successful
 * @property list<Shapes\BatchDeviceErrorResponseItem>|null $failed
 */
class BatchResetDevicesForUserResponse extends Response
{
}
