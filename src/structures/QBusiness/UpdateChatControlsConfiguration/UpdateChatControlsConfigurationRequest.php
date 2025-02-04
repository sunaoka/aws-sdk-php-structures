<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string|null $clientToken
 * @property 'ENTERPRISE_CONTENT_ONLY'|'EXTENDED_KNOWLEDGE_ENABLED'|null $responseScope
 * @property Shapes\OrchestrationConfiguration|null $orchestrationConfiguration
 * @property Shapes\BlockedPhrasesConfigurationUpdate|null $blockedPhrasesConfigurationUpdate
 * @property list<Shapes\TopicConfiguration>|null $topicConfigurationsToCreateOrUpdate
 * @property list<Shapes\TopicConfiguration>|null $topicConfigurationsToDelete
 * @property Shapes\CreatorModeConfiguration|null $creatorModeConfiguration
 */
class UpdateChatControlsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     clientToken?: string|null,
     *     responseScope?: 'ENTERPRISE_CONTENT_ONLY'|'EXTENDED_KNOWLEDGE_ENABLED'|null,
     *     orchestrationConfiguration?: Shapes\OrchestrationConfiguration|null,
     *     blockedPhrasesConfigurationUpdate?: Shapes\BlockedPhrasesConfigurationUpdate|null,
     *     topicConfigurationsToCreateOrUpdate?: list<Shapes\TopicConfiguration>|null,
     *     topicConfigurationsToDelete?: list<Shapes\TopicConfiguration>|null,
     *     creatorModeConfiguration?: Shapes\CreatorModeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
