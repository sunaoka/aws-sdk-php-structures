<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AthenaPropertiesOutput|null $athenaProperties
 * @property GluePropertiesOutput|null $glueProperties
 * @property HyperPodPropertiesOutput|null $hyperPodProperties
 * @property IamPropertiesOutput|null $iamProperties
 * @property RedshiftPropertiesOutput|null $redshiftProperties
 * @property SparkEmrPropertiesOutput|null $sparkEmrProperties
 * @property SparkGluePropertiesOutput|null $sparkGlueProperties
 * @property S3PropertiesOutput|null $s3Properties
 * @property AmazonQPropertiesOutput|null $amazonQProperties
 * @property MlflowPropertiesOutput|null $mlflowProperties
 * @property WorkflowsMwaaPropertiesOutput|null $workflowsMwaaProperties
 * @property WorkflowsServerlessPropertiesOutput|null $workflowsServerlessProperties
 */
class ConnectionPropertiesOutput extends Shape
{
    /**
     * @param array{
     *     athenaProperties?: AthenaPropertiesOutput|null,
     *     glueProperties?: GluePropertiesOutput|null,
     *     hyperPodProperties?: HyperPodPropertiesOutput|null,
     *     iamProperties?: IamPropertiesOutput|null,
     *     redshiftProperties?: RedshiftPropertiesOutput|null,
     *     sparkEmrProperties?: SparkEmrPropertiesOutput|null,
     *     sparkGlueProperties?: SparkGluePropertiesOutput|null,
     *     s3Properties?: S3PropertiesOutput|null,
     *     amazonQProperties?: AmazonQPropertiesOutput|null,
     *     mlflowProperties?: MlflowPropertiesOutput|null,
     *     workflowsMwaaProperties?: WorkflowsMwaaPropertiesOutput|null,
     *     workflowsServerlessProperties?: WorkflowsServerlessPropertiesOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
