<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListDatasetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $datasetVersion
 * @property int $exampleCount
 * @property ExampleCountByField|null $exampleCountByField
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class DatasetVersionSummary extends Shape
{
    /**
     * @param array{
     *     datasetVersion: string,
     *     exampleCount: int,
     *     exampleCountByField?: ExampleCountByField|null,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
