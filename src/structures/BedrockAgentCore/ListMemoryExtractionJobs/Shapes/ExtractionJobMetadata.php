<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryExtractionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobID
 * @property ExtractionJobMessages $messages
 * @property 'FAILED'|null $status
 * @property string|null $failureReason
 * @property string|null $strategyId
 * @property string|null $sessionId
 * @property string|null $actorId
 */
class ExtractionJobMetadata extends Shape
{
    /**
     * @param array{
     *     jobID: string,
     *     messages: ExtractionJobMessages,
     *     status?: 'FAILED'|null,
     *     failureReason?: string|null,
     *     strategyId?: string|null,
     *     sessionId?: string|null,
     *     actorId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
