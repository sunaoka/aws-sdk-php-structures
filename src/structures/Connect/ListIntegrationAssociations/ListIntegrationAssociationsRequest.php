<?php

namespace Sunaoka\Aws\Structures\Connect\ListIntegrationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'WISDOM_QUICK_RESPONSES'|'CASES_DOMAIN'|'APPLICATION'|'FILE_SCANNER'|null $IntegrationType
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $IntegrationArn
 */
class ListIntegrationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IntegrationType?: 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'WISDOM_QUICK_RESPONSES'|'CASES_DOMAIN'|'APPLICATION'|'FILE_SCANNER'|null,
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
