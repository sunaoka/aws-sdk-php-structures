<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REDSHIFT'|'AWS_DATA_CATALOG' $type
 * @property RedshiftQueryEngineAwsDataCatalogStorageConfiguration|null $awsDataCatalogConfiguration
 * @property RedshiftQueryEngineRedshiftStorageConfiguration|null $redshiftConfiguration
 */
class RedshiftQueryEngineStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     type: 'REDSHIFT'|'AWS_DATA_CATALOG',
     *     awsDataCatalogConfiguration?: RedshiftQueryEngineAwsDataCatalogStorageConfiguration|null,
     *     redshiftConfiguration?: RedshiftQueryEngineRedshiftStorageConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
