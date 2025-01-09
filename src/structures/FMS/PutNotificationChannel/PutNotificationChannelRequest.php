<?php

namespace Sunaoka\Aws\Structures\FMS\PutNotificationChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SnsTopicArn
 * @property string $SnsRoleName
 */
class PutNotificationChannelRequest extends Request
{
    /**
     * @param array{
     *     SnsTopicArn: string,
     *     SnsRoleName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
