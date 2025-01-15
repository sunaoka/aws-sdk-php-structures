<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaPropertiesOutput|null $athenaProperties
 * @property GluePropertiesOutput|null $glueProperties
 * @property HyperPodPropertiesOutput|null $hyperPodProperties
 * @property IamPropertiesOutput|null $iamProperties
 * @property RedshiftPropertiesOutput|null $redshiftProperties
 * @property SparkEmrPropertiesOutput|null $sparkEmrProperties
 * @property SparkGluePropertiesOutput|null $sparkGlueProperties
 */
class ConnectionPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: AthenaPropertiesOutput|null,
     *     glueProperties?: GluePropertiesOutput|null,
     *     hyperPodProperties?: HyperPodPropertiesOutput|null,
     *     iamProperties?: IamPropertiesOutput|null,
     *     redshiftProperties?: RedshiftPropertiesOutput|null,
     *     sparkEmrProperties?: SparkEmrPropertiesOutput|null,
     *     sparkGlueProperties?: SparkGluePropertiesOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
