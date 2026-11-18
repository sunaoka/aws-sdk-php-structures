<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetId
 * @property string|null $datasetVersion
 */
class DatasetSource extends Shape
{
    /**
     * @param array{
     *     datasetId: string,
     *     datasetVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
