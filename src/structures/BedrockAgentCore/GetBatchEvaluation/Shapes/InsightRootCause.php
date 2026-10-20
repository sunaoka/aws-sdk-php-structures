<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $explanation
 * @property int|null $affectedSessionCount
 * @property string|null $suggestedFix
 * @property list<SampleSession>|null $sampleSessions
 */
class InsightRootCause extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     explanation: string,
     *     affectedSessionCount?: int|null,
     *     suggestedFix?: string|null,
     *     sampleSessions?: list<SampleSession>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
