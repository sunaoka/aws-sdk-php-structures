<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENTERPRISE_CONTENT_ONLY'|'EXTENDED_KNOWLEDGE_ENABLED' $responseScope
 * @property Shapes\BlockedPhrasesConfiguration $blockedPhrases
 * @property list<Shapes\TopicConfiguration> $topicConfigurations
 * @property Shapes\AppliedCreatorModeConfiguration $creatorModeConfiguration
 * @property string $nextToken
 */
class GetChatControlsConfigurationResponse extends Response
{
}
