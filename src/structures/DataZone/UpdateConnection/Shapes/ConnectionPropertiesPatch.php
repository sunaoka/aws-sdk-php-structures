<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonQPropertiesPatch|null $amazonQProperties
 * @property AthenaPropertiesPatch|null $athenaProperties
 * @property GluePropertiesPatch|null $glueProperties
 * @property IamPropertiesPatch|null $iamProperties
 * @property MlflowPropertiesPatch|null $mlflowProperties
 * @property RedshiftPropertiesPatch|null $redshiftProperties
 * @property S3PropertiesPatch|null $s3Properties
 * @property SparkEmrPropertiesPatch|null $sparkEmrProperties
 */
class ConnectionPropertiesPatch extends Shape
{
    /**
     * @param array{
     *     amazonQProperties?: AmazonQPropertiesPatch|null,
     *     athenaProperties?: AthenaPropertiesPatch|null,
     *     glueProperties?: GluePropertiesPatch|null,
     *     iamProperties?: IamPropertiesPatch|null,
     *     mlflowProperties?: MlflowPropertiesPatch|null,
     *     redshiftProperties?: RedshiftPropertiesPatch|null,
     *     s3Properties?: S3PropertiesPatch|null,
     *     sparkEmrProperties?: SparkEmrPropertiesPatch|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
