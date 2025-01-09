<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateResolver;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $typeName
 * @property string $fieldName
 * @property string $dataSourceName
 * @property string $requestMappingTemplate
 * @property string $responseMappingTemplate
 * @property 'UNIT'|'PIPELINE' $kind
 * @property Shapes\PipelineConfig $pipelineConfig
 * @property Shapes\SyncConfig $syncConfig
 * @property Shapes\CachingConfig $cachingConfig
 * @property int<0, 2000> $maxBatchSize
 * @property Shapes\AppSyncRuntime $runtime
 * @property string $code
 * @property 'ENABLED'|'DISABLED' $metricsConfig
 */
class CreateResolverRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     typeName: string,
     *     fieldName: string,
     *     dataSourceName?: string,
     *     requestMappingTemplate?: string,
     *     responseMappingTemplate?: string,
     *     kind?: 'UNIT'|'PIPELINE',
     *     pipelineConfig?: Shapes\PipelineConfig,
     *     syncConfig?: Shapes\SyncConfig,
     *     cachingConfig?: Shapes\CachingConfig,
     *     maxBatchSize?: int<0, 2000>,
     *     runtime?: Shapes\AppSyncRuntime,
     *     code?: string,
     *     metricsConfig?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
