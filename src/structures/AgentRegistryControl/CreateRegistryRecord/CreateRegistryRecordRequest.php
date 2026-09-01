<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreateRegistryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $name
 * @property string|null $displayName
 * @property string|null $description
 * @property 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY' $recordType
 * @property Shapes\Descriptors $descriptors
 * @property string|null $recordVersion
 * @property string|null $clientToken
 * @property list<Shapes\Provenance>|null $provenance
 * @property array<string, string>|null $tags
 */
class CreateRegistryRecordRequest extends Request
{
    /**
     * @param array{
     *     registryId: string,
     *     name: string,
     *     displayName?: string|null,
     *     description?: string|null,
     *     recordType: 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY',
     *     descriptors: Shapes\Descriptors,
     *     recordVersion?: string|null,
     *     clientToken?: string|null,
     *     provenance?: list<Shapes\Provenance>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
