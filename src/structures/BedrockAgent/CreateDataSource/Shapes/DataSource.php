<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'RETAIN'|'DELETE'|null $dataDeletionPolicy
 * @property DataSourceConfiguration $dataSourceConfiguration
 * @property string $dataSourceId
 * @property string|null $description
 * @property list<string>|null $failureReasons
 * @property string $knowledgeBaseId
 * @property string $name
 * @property ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property VectorIngestionConfiguration|null $vectorIngestionConfiguration
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     dataDeletionPolicy?: 'RETAIN'|'DELETE'|null,
     *     dataSourceConfiguration: DataSourceConfiguration,
     *     dataSourceId: string,
     *     description?: string|null,
     *     failureReasons?: list<string>|null,
     *     knowledgeBaseId: string,
     *     name: string,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null,
     *     status: 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL',
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     vectorIngestionConfiguration?: VectorIngestionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
