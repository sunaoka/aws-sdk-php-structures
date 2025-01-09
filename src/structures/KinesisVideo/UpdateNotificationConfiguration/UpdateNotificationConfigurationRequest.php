<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property Shapes\NotificationConfiguration $NotificationConfiguration
 */
class UpdateNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string,
     *     StreamARN?: string,
     *     NotificationConfiguration?: Shapes\NotificationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
