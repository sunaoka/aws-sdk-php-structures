<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSourceId
 * @property string $description
 * @property string $knowledgeBaseId
 * @property string $name
 * @property 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DataSourceSummary extends Shape
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     description?: string,
     *     knowledgeBaseId: string,
     *     name: string,
     *     status: 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
