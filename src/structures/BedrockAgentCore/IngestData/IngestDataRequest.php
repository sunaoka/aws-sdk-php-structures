<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\IngestData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property Shapes\ContentSource $source
 * @property \Aws\Api\DateTimeResult $contentTimestamp
 * @property string $actorId
 * @property string|null $sessionId
 * @property Shapes\ExtractionConfig|null $extractionConfig
 * @property array<string, Shapes\MetadataValue>|null $metadata
 * @property string|null $clientToken
 */
class IngestDataRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     source: Shapes\ContentSource,
     *     contentTimestamp: \Aws\Api\DateTimeResult,
     *     actorId: string,
     *     sessionId?: string|null,
     *     extractionConfig?: Shapes\ExtractionConfig|null,
     *     metadata?: array<string, Shapes\MetadataValue>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
