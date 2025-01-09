<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaPropertiesPatch $athenaProperties
 * @property GluePropertiesPatch $glueProperties
 * @property IamPropertiesPatch $iamProperties
 * @property RedshiftPropertiesPatch $redshiftProperties
 * @property SparkEmrPropertiesPatch $sparkEmrProperties
 */
class ConnectionPropertiesPatch extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: AthenaPropertiesPatch,
     *     glueProperties?: GluePropertiesPatch,
     *     iamProperties?: IamPropertiesPatch,
     *     redshiftProperties?: RedshiftPropertiesPatch,
     *     sparkEmrProperties?: SparkEmrPropertiesPatch
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
