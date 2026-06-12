<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $clusterId
 * @property string $name
 * @property string $description
 * @property int $affectedSessionCount
 * @property list<RootCauseCluster> $rootCauses
 */
class FailureSubCategoryCluster extends Shape
{
    /**
     * @param array{
     *     clusterId: int,
     *     name: string,
     *     description: string,
     *     affectedSessionCount: int,
     *     rootCauses: list<RootCauseCluster>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
