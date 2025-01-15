<?php

namespace Sunaoka\Aws\Structures\Sms\NotifyAppValidationOutput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property Shapes\NotificationContext|null $notificationContext
 */
class NotifyAppValidationOutputRequest extends Request
{
    /**
     * @param array{
     *     appId: string,
     *     notificationContext?: Shapes\NotificationContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
