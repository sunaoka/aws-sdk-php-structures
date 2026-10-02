<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateNotifyCodeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $notifyCodeConfigurationId
 * @property string $notifyCodeConfigurationArn
 * @property string $notifyCodeConfigurationName
 * @property CodeConfigurationParameters|null $codeConfigurationParameters
 * @property ChannelParameters|null $channelParameters
 * @property bool $deletionProtectionEnabled
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class NotifyCodeConfiguration extends Shape
{
    /**
     * @param array{
     *     notifyCodeConfigurationId: string,
     *     notifyCodeConfigurationArn: string,
     *     notifyCodeConfigurationName: string,
     *     codeConfigurationParameters?: CodeConfigurationParameters|null,
     *     channelParameters?: ChannelParameters|null,
     *     deletionProtectionEnabled: bool,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
