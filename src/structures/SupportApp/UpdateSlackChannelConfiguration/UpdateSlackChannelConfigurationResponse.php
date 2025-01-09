<?php

namespace Sunaoka\Aws\Structures\SupportApp\UpdateSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Response;

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
class UpdateSlackChannelConfigurationResponse extends Response
{
}
