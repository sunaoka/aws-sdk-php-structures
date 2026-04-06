<?php

namespace Sunaoka\Aws\Structures\Connect\CreateIntegrationAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'CASES_DOMAIN' $IntegrationType
 * @property string $IntegrationArn
 * @property string|null $SourceApplicationUrl
 * @property string|null $SourceApplicationName
 * @property 'SALESFORCE'|'ZENDESK'|null $SourceType
 * @property array<string, string>|null $Tags
 */
class CreateIntegrationAssociationRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IntegrationType: 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'CASES_DOMAIN',
     *     IntegrationArn: string,
     *     SourceApplicationUrl?: string|null,
     *     SourceApplicationName?: string|null,
     *     SourceType?: 'SALESFORCE'|'ZENDESK'|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
