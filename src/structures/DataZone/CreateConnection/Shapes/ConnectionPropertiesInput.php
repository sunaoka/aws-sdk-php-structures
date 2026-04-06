<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaPropertiesInput|null $athenaProperties
 * @property GluePropertiesInput|null $glueProperties
 * @property HyperPodPropertiesInput|null $hyperPodProperties
 * @property IamPropertiesInput|null $iamProperties
 * @property RedshiftPropertiesInput|null $redshiftProperties
 * @property SparkEmrPropertiesInput|null $sparkEmrProperties
 * @property SparkGluePropertiesInput|null $sparkGlueProperties
 */
class ConnectionPropertiesInput extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: AthenaPropertiesInput|null,
     *     glueProperties?: GluePropertiesInput|null,
     *     hyperPodProperties?: HyperPodPropertiesInput|null,
     *     iamProperties?: IamPropertiesInput|null,
     *     redshiftProperties?: RedshiftPropertiesInput|null,
     *     sparkEmrProperties?: SparkEmrPropertiesInput|null,
     *     sparkGlueProperties?: SparkGluePropertiesInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
