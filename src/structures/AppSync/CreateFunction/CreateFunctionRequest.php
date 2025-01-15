<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateFunction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $apiId
 * @property string $name
 * @property string|null $description
 * @property string $dataSourceName
 * @property string|null $requestMappingTemplate
 * @property string|null $responseMappingTemplate
 * @property string|null $functionVersion
 * @property Shapes\SyncConfig|null $syncConfig
 * @property int<0, 2000>|null $maxBatchSize
 * @property Shapes\AppSyncRuntime|null $runtime
 * @property string|null $code
 */
class CreateFunctionRequest extends Request
{
    /**
     * @param array{
     *     apiId: string,
     *     name: string,
     *     description?: string|null,
     *     dataSourceName: string,
     *     requestMappingTemplate?: string|null,
     *     responseMappingTemplate?: string|null,
     *     functionVersion?: string|null,
     *     syncConfig?: Shapes\SyncConfig|null,
     *     maxBatchSize?: int<0, 2000>|null,
     *     runtime?: Shapes\AppSyncRuntime|null,
     *     code?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
