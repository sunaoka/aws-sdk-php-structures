<?php

namespace Sunaoka\Aws\Structures\Connect\ListIntegrationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'WISDOM_QUICK_RESPONSES'|'Q_MESSAGE_TEMPLATES'|'CASES_DOMAIN'|'APPLICATION'|'FILE_SCANNER'|'SES_IDENTITY'|'ANALYTICS_CONNECTOR'|'CALL_TRANSFER_CONNECTOR'|'COGNITO_USER_POOL'|'MESSAGE_PROCESSOR'|null $IntegrationType
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $IntegrationArn
 */
class ListIntegrationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IntegrationType?: 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'WISDOM_QUICK_RESPONSES'|'Q_MESSAGE_TEMPLATES'|'CASES_DOMAIN'|'APPLICATION'|'FILE_SCANNER'|'SES_IDENTITY'|'ANALYTICS_CONNECTOR'|'CALL_TRANSFER_CONNECTOR'|'COGNITO_USER_POOL'|'MESSAGE_PROCESSOR'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     IntegrationArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
