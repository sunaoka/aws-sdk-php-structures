<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipelineNotifications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property Shapes\Notifications $Notifications
 */
class UpdatePipelineNotificationsRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Notifications: Shapes\Notifications
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
