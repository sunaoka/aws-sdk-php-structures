<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string|null $clientToken
 * @property string $name
 * @property string|null $description
 * @property Shapes\DataSourceConfiguration $dataSourceConfiguration
 * @property 'RETAIN'|'DELETE'|null $dataDeletionPolicy
 * @property Shapes\ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property Shapes\VectorIngestionConfiguration|null $vectorIngestionConfiguration
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     clientToken?: string|null,
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
