<?php

namespace Sunaoka\Aws\Structures\Connect\ListIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IntegrationAssociationId
 * @property string|null $IntegrationAssociationArn
 * @property string|null $InstanceId
 * @property 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'CASES_DOMAIN'|null $IntegrationType
 * @property string|null $IntegrationArn
 * @property string|null $SourceApplicationUrl
 * @property string|null $SourceApplicationName
 * @property 'SALESFORCE'|'ZENDESK'|null $SourceType
 */
class IntegrationAssociationSummary extends Shape
{
    /**
     * @param array{
     *     IntegrationAssociationId?: string|null,
     *     IntegrationAssociationArn?: string|null,
     *     InstanceId?: string|null,
     *     IntegrationType?: 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'CASES_DOMAIN'|null,
     *     IntegrationArn?: string|null,
     *     SourceApplicationUrl?: string|null,
     *     SourceApplicationName?: string|null,
     *     SourceType?: 'SALESFORCE'|'ZENDESK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
