<?php

namespace Sunaoka\Aws\Structures\SupportApp\CreateSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelId
 * @property string|null $channelName
 * @property string $channelRoleArn
 * @property bool|null $notifyOnAddCorrespondenceToCase
 * @property 'none'|'all'|'high' $notifyOnCaseSeverity
 * @property bool|null $notifyOnCreateOrReopenCase
 * @property bool|null $notifyOnResolveCase
 * @property string $teamId
 */
class CreateSlackChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     channelId: string,
     *     channelName?: string|null,
     *     channelRoleArn: string,
     *     notifyOnAddCorrespondenceToCase?: bool|null,
     *     notifyOnCaseSeverity: 'none'|'all'|'high',
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
