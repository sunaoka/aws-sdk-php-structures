<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property string $name
 * @property string|null $description
 * @property Shapes\DataSourceConfiguration $dataSourceConfiguration
 * @property 'RETAIN'|'DELETE'|null $dataDeletionPolicy
 * @property Shapes\ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property Shapes\VectorIngestionConfiguration|null $vectorIngestionConfiguration
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     name: string,
     *     description?: string|null,
     *     dataSourceConfiguration: Shapes\DataSourceConfiguration,
     *     dataDeletionPolicy?: 'RETAIN'|'DELETE'|null,
     *     serverSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration|null,
     *     vectorIngestionConfiguration?: Shapes\VectorIngestionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
