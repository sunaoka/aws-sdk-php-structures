<?php

namespace Sunaoka\Aws\Structures\SupportApp\CreateSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelId
 * @property string $channelName
 * @property string $channelRoleArn
 * @property bool $notifyOnAddCorrespondenceToCase
 * @property 'none'|'all'|'high' $notifyOnCaseSeverity
 * @property bool $notifyOnCreateOrReopenCase
 * @property bool $notifyOnResolveCase
 * @property string $teamId
 */
class CreateSlackChannelConfigurationRequest extends Request
{
    /**
     * @param array{
     *     channelId: string,
     *     channelName?: string,
     *     channelRoleArn: string,
     *     notifyOnAddCorrespondenceToCase?: bool,
     *     notifyOnCaseSeverity: 'none'|'all'|'high',
     *     notifyOnCreateOrReopenCase?: bool,
     *     notifyOnResolveCase?: bool,
     *     teamId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
