<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreateRegistryRecord;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $name
 * @property string|null $displayName
 * @property string|null $description
 * @property 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY'|'WEB_BOT' $recordType
 * @property Shapes\Descriptors $descriptors
 * @property Shapes\RegistryRecordArtifactUpload|null $artifact
 * @property string|null $recordVersion
 * @property string|null $clientToken
 * @property list<Shapes\Provenance>|null $provenance
 * @property Shapes\CustomMetadataDocument|null $customMetadata
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
     *     recordType: 'MCP'|'AGENT'|'CUSTOM'|'SKILL'|'GATEWAY'|'WEB_BOT',
     *     descriptors: Shapes\Descriptors,
     *     artifact?: Shapes\RegistryRecordArtifactUpload|null,
     *     recordVersion?: string|null,
     *     clientToken?: string|null,
     *     provenance?: list<Shapes\Provenance>|null,
     *     customMetadata?: Shapes\CustomMetadataDocument|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
