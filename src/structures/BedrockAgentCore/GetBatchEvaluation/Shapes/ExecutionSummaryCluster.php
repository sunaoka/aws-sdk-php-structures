<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $clusterId
 * @property string $name
 * @property string $description
 * @property int $affectedSessionCount
 * @property list<ExecutionSummaryAffectedSession> $affectedSessions
 */
class ExecutionSummaryCluster extends Shape
{
    /**
     * @param array{
     *     clusterId: int,
     *     name: string,
     *     description: string,
     *     affectedSessionCount: int,
     *     affectedSessions: list<ExecutionSummaryAffectedSession>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
