<?php

namespace Sunaoka\Aws\Structures\QBusiness\UpdateChatControlsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $clientToken
 * @property 'ENTERPRISE_CONTENT_ONLY'|'EXTENDED_KNOWLEDGE_ENABLED' $responseScope
 * @property Shapes\BlockedPhrasesConfigurationUpdate $blockedPhrasesConfigurationUpdate
 * @property list<Shapes\TopicConfiguration> $topicConfigurationsToCreateOrUpdate
 * @property list<Shapes\TopicConfiguration> $topicConfigurationsToDelete
 * @property Shapes\CreatorModeConfiguration $creatorModeConfiguration
 */
class UpdateChatControlsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     clientToken?: string,
     *     responseScope?: 'ENTERPRISE_CONTENT_ONLY'|'EXTENDED_KNOWLEDGE_ENABLED',
     *     blockedPhrasesConfigurationUpdate?: Shapes\BlockedPhrasesConfigurationUpdate,
     *     topicConfigurationsToCreateOrUpdate?: list<Shapes\TopicConfiguration>,
     *     topicConfigurationsToDelete?: list<Shapes\TopicConfiguration>,
     *     creatorModeConfiguration?: Shapes\CreatorModeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
