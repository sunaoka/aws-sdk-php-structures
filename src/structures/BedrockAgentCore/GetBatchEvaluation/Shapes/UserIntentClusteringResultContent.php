<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<UserIntentCluster> $userIntents
 */
class UserIntentClusteringResultContent extends Shape
{
    /**
     * @param array{userIntents: list<UserIntentCluster>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
