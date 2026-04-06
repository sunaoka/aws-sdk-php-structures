<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property 'RETAIN'|'DELETE'|null $dataDeletionPolicy
 * @property Shapes\DataSourceConfiguration $dataSourceConfiguration
 * @property string|null $description
 * @property string $knowledgeBaseId
 * @property string $name
 * @property Shapes\ServerSideEncryptionConfiguration|null $serverSideEncryptionConfiguration
 * @property Shapes\VectorIngestionConfiguration|null $vectorIngestionConfiguration
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     dataDeletionPolicy?: 'RETAIN'|'DELETE'|null,
     *     dataSourceConfiguration: Shapes\DataSourceConfiguration,
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
