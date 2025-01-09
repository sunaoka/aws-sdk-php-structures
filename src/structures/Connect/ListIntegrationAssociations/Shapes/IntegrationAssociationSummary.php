<?php

namespace Sunaoka\Aws\Structures\Connect\ListIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IntegrationAssociationId
 * @property string $IntegrationAssociationArn
 * @property string $InstanceId
 * @property 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'WISDOM_QUICK_RESPONSES'|'Q_MESSAGE_TEMPLATES'|'CASES_DOMAIN'|'APPLICATION'|'FILE_SCANNER'|'SES_IDENTITY'|'ANALYTICS_CONNECTOR'|'CALL_TRANSFER_CONNECTOR'|'COGNITO_USER_POOL' $IntegrationType
 * @property string $IntegrationArn
 * @property string $SourceApplicationUrl
 * @property string $SourceApplicationName
 * @property 'SALESFORCE'|'ZENDESK'|'CASES' $SourceType
 */
class IntegrationAssociationSummary extends Shape
{
    /**
     * @param array{
     *     IntegrationAssociationId?: string,
     *     IntegrationAssociationArn?: string,
     *     InstanceId?: string,
     *     IntegrationType?: 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'WISDOM_QUICK_RESPONSES'|'Q_MESSAGE_TEMPLATES'|'CASES_DOMAIN'|'APPLICATION'|'FILE_SCANNER'|'SES_IDENTITY'|'ANALYTICS_CONNECTOR'|'CALL_TRANSFER_CONNECTOR'|'COGNITO_USER_POOL',
     *     IntegrationArn?: string,
     *     SourceApplicationUrl?: string,
     *     SourceApplicationName?: string,
     *     SourceType?: 'SALESFORCE'|'ZENDESK'|'CASES'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
