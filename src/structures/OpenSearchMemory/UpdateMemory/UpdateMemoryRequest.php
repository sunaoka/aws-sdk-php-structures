<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\UpdateMemory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $memoryId
 * @property string|null $content
 * @property array<string, string>|null $metadata
 * @property 'REPLACE'|'MERGE'|null $metadataMode
 * @property string|null $actorId
 * @property string|null $strategyName
 */
class UpdateMemoryRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     memoryId: string,
     *     content?: string|null,
     *     metadata?: array<string, string>|null,
     *     metadataMode?: 'REPLACE'|'MERGE'|null,
     *     actorId?: string|null,
     *     strategyName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
