<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $clusterId
 * @property string $name
 * @property string $rootCause
 * @property string $recommendation
 * @property int $affectedSessionCount
 * @property list<AffectedSession> $affectedSessions
 */
class RootCauseCluster extends Shape
{
    /**
     * @param array{
     *     clusterId: int,
     *     name: string,
     *     rootCause: string,
     *     recommendation: string,
     *     affectedSessionCount: int,
     *     affectedSessions: list<AffectedSession>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
