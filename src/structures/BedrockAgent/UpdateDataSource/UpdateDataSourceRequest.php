<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RETAIN'|'DELETE'|null $dataDeletionPolicy
 * @property Shapes\DataSourceConfiguration $dataSourceConfiguration
 * @property string $dataSourceId
 * @property string|null $description
 * @property string $knowledgeBaseId
 * @property string $name
 * @property Shapes\ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property Shapes\VectorIngestionConfiguration|null $vectorIngestionConfiguration
 */
class UpdateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     dataDeletionPolicy?: 'RETAIN'|'DELETE'|null,
     *     dataSourceConfiguration: Shapes\DataSourceConfiguration,
     *     dataSourceId: string,
     *     description?: string|null,
     *     knowledgeBaseId: string,
     *     name: string,
     *     serverSideEncryptionConfiguration?: Shapes\ServerSideEncryptionConfiguration|null,
     *     vectorIngestionConfiguration?: Shapes\VectorIngestionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
