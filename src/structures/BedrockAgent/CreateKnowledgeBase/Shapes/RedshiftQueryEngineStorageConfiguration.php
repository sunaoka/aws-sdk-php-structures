<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftQueryEngineAwsDataCatalogStorageConfiguration|null $awsDataCatalogConfiguration
 * @property RedshiftQueryEngineRedshiftStorageConfiguration|null $redshiftConfiguration
 * @property 'REDSHIFT'|'AWS_DATA_CATALOG' $type
 */
class RedshiftQueryEngineStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     awsDataCatalogConfiguration?: RedshiftQueryEngineAwsDataCatalogStorageConfiguration|null,
     *     redshiftConfiguration?: RedshiftQueryEngineRedshiftStorageConfiguration|null,
     *     type: 'REDSHIFT'|'AWS_DATA_CATALOG'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
