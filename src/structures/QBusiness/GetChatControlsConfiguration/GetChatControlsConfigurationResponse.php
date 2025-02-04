<?php

namespace Sunaoka\Aws\Structures\QBusiness\GetChatControlsConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'ENTERPRISE_CONTENT_ONLY'|'EXTENDED_KNOWLEDGE_ENABLED'|null $responseScope
 * @property Shapes\AppliedOrchestrationConfiguration|null $orchestrationConfiguration
 * @property Shapes\BlockedPhrasesConfiguration|null $blockedPhrases
 * @property list<Shapes\TopicConfiguration>|null $topicConfigurations
 * @property Shapes\AppliedCreatorModeConfiguration|null $creatorModeConfiguration
 * @property string|null $nextToken
 */
class GetChatControlsConfigurationResponse extends Response
{
}
