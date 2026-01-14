<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaPropertiesPatch|null $athenaProperties
 * @property GluePropertiesPatch|null $glueProperties
 * @property IamPropertiesPatch|null $iamProperties
 * @property RedshiftPropertiesPatch|null $redshiftProperties
 * @property SparkEmrPropertiesPatch|null $sparkEmrProperties
 * @property S3PropertiesPatch|null $s3Properties
 * @property AmazonQPropertiesPatch|null $amazonQProperties
 * @property MlflowPropertiesPatch|null $mlflowProperties
 */
class ConnectionPropertiesPatch extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: AthenaPropertiesPatch|null,
     *     glueProperties?: GluePropertiesPatch|null,
     *     iamProperties?: IamPropertiesPatch|null,
     *     redshiftProperties?: RedshiftPropertiesPatch|null,
     *     sparkEmrProperties?: SparkEmrPropertiesPatch|null,
     *     s3Properties?: S3PropertiesPatch|null,
     *     amazonQProperties?: AmazonQPropertiesPatch|null,
     *     mlflowProperties?: MlflowPropertiesPatch|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
