<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property string $name
 * @property 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL' $status
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class DataSourceSummary extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     name: string,
     *     status: 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL',
     *     description?: string|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
