<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateRegistryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $name
 * @property string|null $description
 * @property 'MCP'|'A2A'|'CUSTOM'|'AGENT_SKILLS' $descriptorType
 * @property Shapes\Descriptors|null $descriptors
 * @property string|null $recordVersion
 * @property 'URL'|null $synchronizationType
 * @property Shapes\SynchronizationConfiguration|null $synchronizationConfiguration
 * @property string|null $clientToken
 */
class CreateRegistryRecordRequest extends Request
{
    /**
     * @param array{
     *     registryId: string,
     *     name: string,
     *     description?: string|null,
     *     descriptorType: 'MCP'|'A2A'|'CUSTOM'|'AGENT_SKILLS',
     *     descriptors?: Shapes\Descriptors|null,
     *     recordVersion?: string|null,
     *     synchronizationType?: 'URL'|null,
     *     synchronizationConfiguration?: Shapes\SynchronizationConfiguration|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
