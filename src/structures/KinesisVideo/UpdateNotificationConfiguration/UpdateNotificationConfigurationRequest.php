<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\UpdateNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamName
 * @property string|null $StreamARN
 * @property Shapes\NotificationConfiguration|null $NotificationConfiguration
 */
class UpdateNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     StreamName?: string|null,
     *     StreamARN?: string|null,
     *     NotificationConfiguration?: Shapes\NotificationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
