<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListBatchEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $numberOfSessionsCompleted
 * @property int|null $numberOfSessionsInProgress
 * @property int|null $numberOfSessionsFailed
 * @property int|null $totalNumberOfSessions
 * @property int|null $numberOfSessionsIgnored
 * @property list<EvaluatorSummary>|null $evaluatorSummaries
 */
class EvaluationJobResults extends Shape
{
    /**
     * @param array{
     *     numberOfSessionsCompleted?: int|null,
     *     numberOfSessionsInProgress?: int|null,
     *     numberOfSessionsFailed?: int|null,
     *     totalNumberOfSessions?: int|null,
     *     numberOfSessionsIgnored?: int|null,
     *     evaluatorSummaries?: list<EvaluatorSummary>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
