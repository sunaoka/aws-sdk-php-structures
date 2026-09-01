<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $recordId
 * @property string|null $name
 * @property Shapes\UpdatedDisplayName|null $displayName
 * @property Shapes\UpdatedDescription|null $description
 * @property 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY'|null $recordType
 * @property Shapes\UpdatedDescriptors|null $descriptors
 * @property string|null $recordVersion
 * @property bool|null $triggerSynchronization
 * @property list<Shapes\Provenance>|null $provenance
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
     *     recordType?: 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY'|null,
     *     descriptors?: Shapes\UpdatedDescriptors|null,
     *     recordVersion?: string|null,
     *     triggerSynchronization?: bool|null,
     *     provenance?: list<Shapes\Provenance>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
