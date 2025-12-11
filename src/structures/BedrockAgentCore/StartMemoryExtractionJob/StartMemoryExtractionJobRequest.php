<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartMemoryExtractionJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memoryId
 * @property Shapes\ExtractionJob $extractionJob
 * @property string|null $clientToken
 */
class StartMemoryExtractionJobRequest extends Request
{
    /**
     * @param array{
     *     memoryId: string,
     *     extractionJob: Shapes\ExtractionJob,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
