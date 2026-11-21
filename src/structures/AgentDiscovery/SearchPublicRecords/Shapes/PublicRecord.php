<?php

namespace Sunaoka\Aws\Structures\AgentDiscovery\SearchPublicRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Identifier $identifier
 * @property string $displayName
 * @property string|null $description
 * @property 'AGENT'|'TOOL'|'SKILL'|'CUSTOM'|'GATEWAY'|'WEB_BOT' $recordType
 * @property string|null $domain
 * @property array<string, DescriptorEntry>|null $descriptors
 * @property list<TrustManifest>|null $trustManifests
 * @property string|null $recordVersion
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class PublicRecord extends Shape
{
    /**
     * @param array{
     *     identifier: Identifier,
     *     displayName: string,
     *     description?: string|null,
     *     recordType: 'AGENT'|'TOOL'|'SKILL'|'CUSTOM'|'GATEWAY'|'WEB_BOT',
     *     domain?: string|null,
     *     descriptors?: array<string, DescriptorEntry>|null,
     *     trustManifests?: list<TrustManifest>|null,
     *     recordVersion?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
