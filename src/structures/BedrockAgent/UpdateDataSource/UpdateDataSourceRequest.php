<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RETAIN'|'DELETE' $dataDeletionPolicy
 * @property Shapes\DataSourceConfiguration $dataSourceConfiguration
 * @property string $dataSourceId
 * @property string $description
 * @property string $knowledgeBaseId
 * @property string $name
 * @property Shapes\ServerSideEncryptionConfiguration $serverSideEncryptionConfiguration
 * @property Shapes\VectorIngestionConfiguration $vectorIngestionConfiguration
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     dataDeletionPolicy?: 'RETAIN'|'DELETE',
     *     dataSourceConfiguration: Shapes\DataSourceConfiguration,
     *     dataSourceId: string,
     *     description?: string,
     *     knowledgeBaseId: string,
     *     name: string,
     *     serverSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration,
     *     vectorIngestionConfiguration?: Shapes\VectorIngestionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
