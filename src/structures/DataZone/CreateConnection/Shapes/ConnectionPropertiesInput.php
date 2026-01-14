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
 * @property S3PropertiesInput|null $s3Properties
 * @property AmazonQPropertiesInput|null $amazonQProperties
 * @property MlflowPropertiesInput|null $mlflowProperties
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
     *     sparkGlueProperties?: SparkGluePropertiesInput|null,
     *     s3Properties?: S3PropertiesInput|null,
     *     amazonQProperties?: AmazonQPropertiesInput|null,
     *     mlflowProperties?: MlflowPropertiesInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
