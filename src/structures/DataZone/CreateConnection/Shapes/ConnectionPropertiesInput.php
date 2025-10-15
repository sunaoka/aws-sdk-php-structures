<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonQPropertiesInput|null $amazonQProperties
 * @property AthenaPropertiesInput|null $athenaProperties
 * @property GluePropertiesInput|null $glueProperties
 * @property HyperPodPropertiesInput|null $hyperPodProperties
 * @property IamPropertiesInput|null $iamProperties
 * @property RedshiftPropertiesInput|null $redshiftProperties
 * @property S3PropertiesInput|null $s3Properties
 * @property SparkEmrPropertiesInput|null $sparkEmrProperties
 * @property SparkGluePropertiesInput|null $sparkGlueProperties
 */
class ConnectionPropertiesInput extends Shape
{
    /**
     * @param array{
     *     amazonQProperties?: AmazonQPropertiesInput|null,
     *     athenaProperties?: AthenaPropertiesInput|null,
     *     glueProperties?: GluePropertiesInput|null,
     *     hyperPodProperties?: HyperPodPropertiesInput|null,
     *     iamProperties?: IamPropertiesInput|null,
     *     redshiftProperties?: RedshiftPropertiesInput|null,
     *     s3Properties?: S3PropertiesInput|null,
     *     sparkEmrProperties?: SparkEmrPropertiesInput|null,
     *     sparkGlueProperties?: SparkGluePropertiesInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
