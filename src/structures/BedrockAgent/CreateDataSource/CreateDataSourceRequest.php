<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property 'RETAIN'|'DELETE' $dataDeletionPolicy
 * @property Shapes\DataSourceConfiguration $dataSourceConfiguration
 * @property string $description
 * @property string $knowledgeBaseId
 * @property string $name
 * @property Shapes\ServerSideEncryptionConfiguration $serverSideEncryptionConfiguration
 * @property Shapes\VectorIngestionConfiguration $vectorIngestionConfiguration
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     dataDeletionPolicy?: 'RETAIN'|'DELETE',
     *     dataSourceConfiguration: Shapes\DataSourceConfiguration,
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
