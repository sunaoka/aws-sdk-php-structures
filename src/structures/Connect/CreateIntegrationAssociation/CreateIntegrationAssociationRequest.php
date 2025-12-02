<?php

namespace Sunaoka\Aws\Structures\Connect\CreateIntegrationAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'WISDOM_QUICK_RESPONSES'|'Q_MESSAGE_TEMPLATES'|'CASES_DOMAIN'|'APPLICATION'|'FILE_SCANNER'|'SES_IDENTITY'|'ANALYTICS_CONNECTOR'|'CALL_TRANSFER_CONNECTOR'|'COGNITO_USER_POOL'|'MESSAGE_PROCESSOR' $IntegrationType
 * @property string $IntegrationArn
 * @property string|null $SourceApplicationUrl
 * @property string|null $SourceApplicationName
 * @property 'SALESFORCE'|'ZENDESK'|'CASES'|null $SourceType
 * @property array<string, string>|null $Tags
 */
class CreateIntegrationAssociationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IntegrationType: 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'WISDOM_QUICK_RESPONSES'|'Q_MESSAGE_TEMPLATES'|'CASES_DOMAIN'|'APPLICATION'|'FILE_SCANNER'|'SES_IDENTITY'|'ANALYTICS_CONNECTOR'|'CALL_TRANSFER_CONNECTOR'|'COGNITO_USER_POOL'|'MESSAGE_PROCESSOR',
     *     IntegrationArn: string,
     *     SourceApplicationUrl?: string|null,
     *     SourceApplicationName?: string|null,
     *     SourceType?: 'SALESFORCE'|'ZENDESK'|'CASES'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
