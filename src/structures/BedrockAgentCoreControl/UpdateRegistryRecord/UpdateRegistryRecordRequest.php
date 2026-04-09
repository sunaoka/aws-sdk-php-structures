<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateRegistryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $recordId
 * @property string|null $name
 * @property Shapes\UpdatedDescription|null $description
 * @property 'MCP'|'A2A'|'CUSTOM'|'AGENT_SKILLS'|null $descriptorType
 * @property Shapes\UpdatedDescriptors|null $descriptors
 * @property string|null $recordVersion
 * @property Shapes\UpdatedSynchronizationType|null $synchronizationType
 * @property Shapes\UpdatedSynchronizationConfiguration|null $synchronizationConfiguration
 * @property bool|null $triggerSynchronization
 */
class UpdateRegistryRecordRequest extends Request
{
    /**
     * @param array{
     *     registryId: string,
     *     recordId: string,
     *     name?: string|null,
     *     description?: Shapes\UpdatedDescription|null,
     *     descriptorType?: 'MCP'|'A2A'|'CUSTOM'|'AGENT_SKILLS'|null,
     *     descriptors?: Shapes\UpdatedDescriptors|null,
     *     recordVersion?: string|null,
     *     synchronizationType?: Shapes\UpdatedSynchronizationType|null,
     *     synchronizationConfiguration?: Shapes\UpdatedSynchronizationConfiguration|null,
     *     triggerSynchronization?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
