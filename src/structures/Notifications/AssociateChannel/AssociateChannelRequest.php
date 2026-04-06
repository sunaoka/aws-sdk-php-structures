<?php

namespace Sunaoka\Aws\Structures\Notifications\AssociateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $notificationConfigurationArn
 */
class AssociateChannelRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     notificationConfigurationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
