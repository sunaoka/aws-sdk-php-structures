<?php

namespace Sunaoka\Aws\Structures\Sms\NotifyAppValidationOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property Shapes\NotificationContext $notificationContext
 */
class NotifyAppValidationOutputRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     notificationContext?: Shapes\NotificationContext
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
