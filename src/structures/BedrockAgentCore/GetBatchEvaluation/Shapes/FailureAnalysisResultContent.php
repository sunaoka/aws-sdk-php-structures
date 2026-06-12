<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FailureCategoryCluster> $failures
 */
class FailureAnalysisResultContent extends Shape
{
    /**
     * @param array{failures: list<FailureCategoryCluster>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
