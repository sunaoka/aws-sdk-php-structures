<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RedshiftQueryEngineAwsDataCatalogStorageConfiguration $awsDataCatalogConfiguration
 * @property RedshiftQueryEngineRedshiftStorageConfiguration $redshiftConfiguration
 * @property 'REDSHIFT'|'AWS_DATA_CATALOG' $type
 */
class RedshiftQueryEngineStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     awsDataCatalogConfiguration?: RedshiftQueryEngineAwsDataCatalogStorageConfiguration,
     *     redshiftConfiguration?: RedshiftQueryEngineRedshiftStorageConfiguration,
     *     type: 'REDSHIFT'|'AWS_DATA_CATALOG'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
