<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property string $name
 * @property 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL' $status
 * @property string|null $description
 * @property DataSourceConfiguration $dataSourceConfiguration
 * @property ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property VectorIngestionConfiguration|null $vectorIngestionConfiguration
 * @property 'RETAIN'|'DELETE'|null $dataDeletionPolicy
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property list<string>|null $failureReasons
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     name: string,
     *     status: 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL',
     *     description?: string|null,
     *     dataSourceConfiguration: DataSourceConfiguration,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration|null,
     *     vectorIngestionConfiguration?: VectorIngestionConfiguration|null,
     *     dataDeletionPolicy?: 'RETAIN'|'DELETE'|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     failureReasons?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
