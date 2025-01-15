<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $typeName
 * @property string $fieldName
 * @property string|null $dataSourceName
 * @property string|null $requestMappingTemplate
 * @property string|null $responseMappingTemplate
 * @property 'UNIT'|'PIPELINE'|null $kind
 * @property Shapes\PipelineConfig|null $pipelineConfig
 * @property Shapes\SyncConfig|null $syncConfig
 * @property Shapes\CachingConfig|null $cachingConfig
 * @property int<0, 2000>|null $maxBatchSize
 * @property Shapes\AppSyncRuntime|null $runtime
 * @property string|null $code
 * @property 'ENABLED'|'DISABLED'|null $metricsConfig
 */
class CreateResolverRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     typeName: string,
     *     fieldName: string,
     *     dataSourceName?: string|null,
     *     requestMappingTemplate?: string|null,
     *     responseMappingTemplate?: string|null,
     *     kind?: 'UNIT'|'PIPELINE'|null,
     *     pipelineConfig?: Shapes\PipelineConfig|null,
     *     syncConfig?: Shapes\SyncConfig|null,
     *     cachingConfig?: Shapes\CachingConfig|null,
     *     maxBatchSize?: int<0, 2000>|null,
     *     runtime?: Shapes\AppSyncRuntime|null,
     *     code?: string|null,
     *     metricsConfig?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
