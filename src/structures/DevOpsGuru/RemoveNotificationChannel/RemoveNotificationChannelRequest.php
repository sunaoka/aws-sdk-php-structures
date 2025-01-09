<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\RemoveNotificationChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 */
class RemoveNotificationChannelRequest extends Request
{
    /**
     * @param array{Id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
