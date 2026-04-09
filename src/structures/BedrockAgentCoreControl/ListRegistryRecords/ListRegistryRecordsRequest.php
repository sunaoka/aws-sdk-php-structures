<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListRegistryRecords;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $name
 * @property 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|null $status
 * @property 'MCP'|'A2A'|'CUSTOM'|'AGENT_SKILLS'|null $descriptorType
 */
class ListRegistryRecordsRequest extends Request
{
    /**
     * @param array{
     *     registryId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     name?: string|null,
     *     status?: 'DRAFT'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'DEPRECATED'|'CREATING'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|null,
     *     descriptorType?: 'MCP'|'A2A'|'CUSTOM'|'AGENT_SKILLS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
