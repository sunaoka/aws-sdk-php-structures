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
 * @property SnowflakePropertiesPatch|null $snowflakeProperties
 * @property AmazonQPropertiesPatch|null $amazonQProperties
 * @property MlflowPropertiesPatch|null $mlflowProperties
 * @property LakehousePropertiesPatch|null $lakehouseProperties
 * @property VpcPropertiesPatch|null $vpcProperties
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
     *     snowflakeProperties?: SnowflakePropertiesPatch|null,
     *     amazonQProperties?: AmazonQPropertiesPatch|null,
     *     mlflowProperties?: MlflowPropertiesPatch|null,
     *     lakehouseProperties?: LakehousePropertiesPatch|null,
     *     vpcProperties?: VpcPropertiesPatch|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
