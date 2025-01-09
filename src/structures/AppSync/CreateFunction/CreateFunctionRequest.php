<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $name
 * @property string $description
 * @property string $dataSourceName
 * @property string $requestMappingTemplate
 * @property string $responseMappingTemplate
 * @property string $functionVersion
 * @property Shapes\SyncConfig $syncConfig
 * @property int<0, 2000> $maxBatchSize
 * @property Shapes\AppSyncRuntime $runtime
 * @property string $code
 */
class CreateFunctionRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     name: string,
     *     description?: string,
     *     dataSourceName: string,
     *     requestMappingTemplate?: string,
     *     responseMappingTemplate?: string,
     *     functionVersion?: string,
     *     syncConfig?: Shapes\SyncConfig,
     *     maxBatchSize?: int<0, 2000>,
     *     runtime?: Shapes\AppSyncRuntime,
     *     code?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
