<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'RETAIN'|'DELETE' $dataDeletionPolicy
 * @property DataSourceConfiguration $dataSourceConfiguration
 * @property string $dataSourceId
 * @property string $description
 * @property list<string> $failureReasons
 * @property string $knowledgeBaseId
 * @property string $name
 * @property ServerSideEncryptionConfiguration $serverSideEncryptionConfiguration
 * @property 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property VectorIngestionConfiguration $vectorIngestionConfiguration
 */
class DataSource extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     dataDeletionPolicy?: 'RETAIN'|'DELETE',
     *     dataSourceConfiguration: DataSourceConfiguration,
     *     dataSourceId: string,
     *     description?: string,
     *     failureReasons?: list<string>,
     *     knowledgeBaseId: string,
     *     name: string,
     *     serverSideEncryptionConfiguration?: ServerSideEncryptionConfiguration,
     *     status: 'AVAILABLE'|'DELETING'|'DELETE_UNSUCCESSFUL',
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     vectorIngestionConfiguration?: VectorIngestionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
