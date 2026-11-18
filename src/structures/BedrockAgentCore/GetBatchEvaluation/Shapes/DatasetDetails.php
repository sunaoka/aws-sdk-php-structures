<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetId
 * @property string $datasetVersion
 */
class DatasetDetails extends Shape
{
    /**
     * @param array{
     *     datasetId: string,
     *     datasetVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
