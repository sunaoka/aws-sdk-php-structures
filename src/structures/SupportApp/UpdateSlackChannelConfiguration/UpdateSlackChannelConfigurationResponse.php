<?php

namespace Sunaoka\Aws\Structures\SupportApp\UpdateSlackChannelConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $channelId
 * @property string|null $channelName
 * @property string|null $channelRoleArn
 * @property bool|null $notifyOnAddCorrespondenceToCase
 * @property 'none'|'all'|'high'|null $notifyOnCaseSeverity
 * @property bool|null $notifyOnCreateOrReopenCase
 * @property bool|null $notifyOnResolveCase
 * @property string|null $teamId
 */
class UpdateSlackChannelConfigurationResponse extends Response
{
}
