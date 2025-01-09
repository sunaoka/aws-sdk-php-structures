<?php

namespace Sunaoka\Aws\Structures\Notifications\DisassociateChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $notificationConfigurationArn
 */
class DisassociateChannelRequest extends Request
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
