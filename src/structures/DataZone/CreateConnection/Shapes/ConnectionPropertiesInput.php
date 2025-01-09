<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaPropertiesInput $athenaProperties
 * @property GluePropertiesInput $glueProperties
 * @property HyperPodPropertiesInput $hyperPodProperties
 * @property IamPropertiesInput $iamProperties
 * @property RedshiftPropertiesInput $redshiftProperties
 * @property SparkEmrPropertiesInput $sparkEmrProperties
 * @property SparkGluePropertiesInput $sparkGlueProperties
 */
class ConnectionPropertiesInput extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: AthenaPropertiesInput,
     *     glueProperties?: GluePropertiesInput,
     *     hyperPodProperties?: HyperPodPropertiesInput,
     *     iamProperties?: IamPropertiesInput,
     *     redshiftProperties?: RedshiftPropertiesInput,
     *     sparkEmrProperties?: SparkEmrPropertiesInput,
     *     sparkGlueProperties?: SparkGluePropertiesInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
