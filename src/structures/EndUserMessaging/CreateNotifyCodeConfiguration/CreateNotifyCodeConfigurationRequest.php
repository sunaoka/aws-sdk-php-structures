<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateNotifyCodeConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $notifyCodeConfigurationName
 * @property Shapes\CodeConfigurationParameters|null $codeConfigurationParameters
 * @property Shapes\ChannelParameters|null $channelParameters
 * @property bool|null $deletionProtectionEnabled
 * @property string|null $clientToken
 * @property list<Shapes\Tag>|null $tags
 */
class CreateNotifyCodeConfigurationRequest extends Request
{
    /**
     * @param array{
     *     notifyCodeConfigurationName: string,
     *     codeConfigurationParameters?: Shapes\CodeConfigurationParameters|null,
     *     channelParameters?: Shapes\ChannelParameters|null,
     *     deletionProtectionEnabled?: bool|null,
     *     clientToken?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
