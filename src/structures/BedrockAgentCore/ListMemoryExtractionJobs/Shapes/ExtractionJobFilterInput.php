<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListMemoryExtractionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $strategyId
 * @property string|null $sessionId
 * @property string|null $actorId
 * @property 'FAILED'|null $status
 */
class ExtractionJobFilterInput extends Shape
{
    /**
     * @param array{
     *     strategyId?: string|null,
     *     sessionId?: string|null,
     *     actorId?: string|null,
     *     status?: 'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
