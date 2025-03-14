<?php

namespace Sunaoka\Aws\Structures\SupportApp\UpdateSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelId
 * @property string|null $channelName
 * @property string|null $channelRoleArn
 * @property bool|null $notifyOnAddCorrespondenceToCase
 * @property 'none'|'all'|'high'|null $notifyOnCaseSeverity
 * @property bool|null $notifyOnCreateOrReopenCase
 * @property bool|null $notifyOnResolveCase
 * @property string $teamId
 */
class UpdateSlackChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     channelId: string,
     *     channelName?: string|null,
     *     channelRoleArn?: string|null,
     *     notifyOnAddCorrespondenceToCase?: bool|null,
     *     notifyOnCaseSeverity?: 'none'|'all'|'high'|null,
     *     notifyOnCreateOrReopenCase?: bool|null,
     *     notifyOnResolveCase?: bool|null,
     *     teamId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
