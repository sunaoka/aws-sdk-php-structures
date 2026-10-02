<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateNotifyCodeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notifyCodeConfigurationId
 * @property string|null $notifyCodeConfigurationName
 * @property Shapes\UpdateCodeConfigurationParameters|null $codeConfigurationParameters
 * @property Shapes\UpdateChannelParameters|null $channelParameters
 * @property bool|null $deletionProtectionEnabled
 */
class UpdateNotifyCodeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     notifyCodeConfigurationId: string,
     *     notifyCodeConfigurationName?: string|null,
     *     codeConfigurationParameters?: Shapes\UpdateCodeConfigurationParameters|null,
     *     channelParameters?: Shapes\UpdateChannelParameters|null,
     *     deletionProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
