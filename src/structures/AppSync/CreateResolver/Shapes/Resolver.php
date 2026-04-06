<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateResolver\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $typeName
 * @property string|null $fieldName
 * @property string|null $dataSourceName
 * @property string|null $resolverArn
 * @property string|null $requestMappingTemplate
 * @property string|null $responseMappingTemplate
 * @property 'UNIT'|'PIPELINE'|null $kind
 * @property PipelineConfig|null $pipelineConfig
 * @property SyncConfig|null $syncConfig
 * @property CachingConfig|null $cachingConfig
 * @property int<0, 2000>|null $maxBatchSize
 * @property AppSyncRuntime|null $runtime
 * @property string|null $code
 * @property 'ENABLED'|'DISABLED'|null $metricsConfig
 */
class Resolver extends Shape
{
    /**
     * @param array{
     *     typeName?: string|null,
     *     fieldName?: string|null,
     *     dataSourceName?: string|null,
     *     resolverArn?: string|null,
     *     requestMappingTemplate?: string|null,
     *     responseMappingTemplate?: string|null,
     *     kind?: 'UNIT'|'PIPELINE'|null,
     *     pipelineConfig?: PipelineConfig|null,
     *     syncConfig?: SyncConfig|null,
     *     cachingConfig?: CachingConfig|null,
     *     maxBatchSize?: int<0, 2000>|null,
     *     runtime?: AppSyncRuntime|null,
     *     code?: string|null,
     *     metricsConfig?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
