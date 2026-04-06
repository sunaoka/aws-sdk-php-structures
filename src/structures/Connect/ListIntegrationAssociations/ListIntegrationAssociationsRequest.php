<?php

namespace Sunaoka\Aws\Structures\Connect\ListIntegrationAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'CASES_DOMAIN'|null $IntegrationType
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListIntegrationAssociationsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IntegrationType?: 'EVENT'|'VOICE_ID'|'PINPOINT_APP'|'WISDOM_ASSISTANT'|'WISDOM_KNOWLEDGE_BASE'|'CASES_DOMAIN'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
