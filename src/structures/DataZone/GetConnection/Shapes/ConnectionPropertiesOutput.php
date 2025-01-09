<?php

namespace Sunaoka\Aws\Structures\DataZone\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaPropertiesOutput $athenaProperties
 * @property GluePropertiesOutput $glueProperties
 * @property HyperPodPropertiesOutput $hyperPodProperties
 * @property IamPropertiesOutput $iamProperties
 * @property RedshiftPropertiesOutput $redshiftProperties
 * @property SparkEmrPropertiesOutput $sparkEmrProperties
 * @property SparkGluePropertiesOutput $sparkGlueProperties
 */
class ConnectionPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: AthenaPropertiesOutput,
     *     glueProperties?: GluePropertiesOutput,
     *     hyperPodProperties?: HyperPodPropertiesOutput,
     *     iamProperties?: IamPropertiesOutput,
     *     redshiftProperties?: RedshiftPropertiesOutput,
     *     sparkEmrProperties?: SparkEmrPropertiesOutput,
     *     sparkGlueProperties?: SparkGluePropertiesOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
