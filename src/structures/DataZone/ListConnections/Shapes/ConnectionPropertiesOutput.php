<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmazonQPropertiesOutput|null $amazonQProperties
 * @property AthenaPropertiesOutput|null $athenaProperties
 * @property GluePropertiesOutput|null $glueProperties
 * @property HyperPodPropertiesOutput|null $hyperPodProperties
 * @property IamPropertiesOutput|null $iamProperties
 * @property RedshiftPropertiesOutput|null $redshiftProperties
 * @property S3PropertiesOutput|null $s3Properties
 * @property SparkEmrPropertiesOutput|null $sparkEmrProperties
 * @property SparkGluePropertiesOutput|null $sparkGlueProperties
 */
class ConnectionPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     amazonQProperties?: AmazonQPropertiesOutput|null,
     *     athenaProperties?: AthenaPropertiesOutput|null,
     *     glueProperties?: GluePropertiesOutput|null,
     *     hyperPodProperties?: HyperPodPropertiesOutput|null,
     *     iamProperties?: IamPropertiesOutput|null,
     *     redshiftProperties?: RedshiftPropertiesOutput|null,
     *     s3Properties?: S3PropertiesOutput|null,
     *     sparkEmrProperties?: SparkEmrPropertiesOutput|null,
     *     sparkGlueProperties?: SparkGluePropertiesOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
