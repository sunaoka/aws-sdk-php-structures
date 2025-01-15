<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $functionId
 * @property string|null $functionArn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $dataSourceName
 * @property string|null $requestMappingTemplate
 * @property string|null $responseMappingTemplate
 * @property string|null $functionVersion
 * @property SyncConfig|null $syncConfig
 * @property int<0, 2000>|null $maxBatchSize
 * @property AppSyncRuntime|null $runtime
 * @property string|null $code
 */
class FunctionConfiguration extends Shape
{
    /**
     * @param array{
     *     functionId?: string|null,
     *     functionArn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     dataSourceName?: string|null,
     *     requestMappingTemplate?: string|null,
     *     responseMappingTemplate?: string|null,
     *     functionVersion?: string|null,
     *     syncConfig?: SyncConfig|null,
     *     maxBatchSize?: int<0, 2000>|null,
     *     runtime?: AppSyncRuntime|null,
     *     code?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
