<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaPropertiesPatch|null $athenaProperties
 * @property GluePropertiesPatch|null $glueProperties
 * @property IamPropertiesPatch|null $iamProperties
 * @property RedshiftPropertiesPatch|null $redshiftProperties
 * @property SparkEmrPropertiesPatch|null $sparkEmrProperties
 */
class ConnectionPropertiesPatch extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: AthenaPropertiesPatch|null,
     *     glueProperties?: GluePropertiesPatch|null,
     *     iamProperties?: IamPropertiesPatch|null,
     *     redshiftProperties?: RedshiftPropertiesPatch|null,
     *     sparkEmrProperties?: SparkEmrPropertiesPatch|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
