<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $typeName
 * @property string $fieldName
 * @property string $dataSourceName
 * @property string $resolverArn
 * @property string $requestMappingTemplate
 * @property string $responseMappingTemplate
 * @property 'UNIT'|'PIPELINE' $kind
 * @property PipelineConfig $pipelineConfig
 * @property SyncConfig $syncConfig
 * @property CachingConfig $cachingConfig
 * @property int $maxBatchSize
 * @property AppSyncRuntime $runtime
 * @property string $code
 * @property 'ENABLED'|'DISABLED' $metricsConfig
 */
class Resolver extends Shape
{
    /**
     * @param array{
     *     typeName?: string,
     *     fieldName?: string,
     *     dataSourceName?: string,
     *     resolverArn?: string,
     *     requestMappingTemplate?: string,
     *     responseMappingTemplate?: string,
     *     kind?: 'UNIT'|'PIPELINE',
     *     pipelineConfig?: PipelineConfig,
     *     syncConfig?: SyncConfig,
     *     cachingConfig?: CachingConfig,
     *     maxBatchSize?: int,
     *     runtime?: AppSyncRuntime,
     *     code?: string,
     *     metricsConfig?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
