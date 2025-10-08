<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatResponseConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $chatResponseConfigurationId
 * @property string|null $chatResponseConfigurationArn
 * @property string|null $displayName
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property Shapes\ChatResponseConfigurationDetail|null $inUseConfiguration
 * @property Shapes\ChatResponseConfigurationDetail|null $lastUpdateConfiguration
 */
class GetChatResponseConfigurationResponse extends Response
{
}
