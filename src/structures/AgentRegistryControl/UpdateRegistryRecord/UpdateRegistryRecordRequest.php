<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $recordId
 * @property string|null $name
 * @property Shapes\UpdatedDisplayName|null $displayName
 * @property Shapes\UpdatedDescription|null $description
 * @property 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|null $recordType
 * @property Shapes\UpdatedDescriptors|null $descriptors
 * @property string|null $recordVersion
 * @property bool|null $triggerSynchronization
 */
class UpdateRegistryRecordRequest extends Request
{
    /**
     * @param array{
     *     registryId: string,
     *     recordId: string,
     *     name?: string|null,
     *     displayName?: Shapes\UpdatedDisplayName|null,
     *     description?: Shapes\UpdatedDescription|null,
     *     recordType?: 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|null,
     *     descriptors?: Shapes\UpdatedDescriptors|null,
     *     recordVersion?: string|null,
     *     triggerSynchronization?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
