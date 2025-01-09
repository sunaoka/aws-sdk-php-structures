<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionId
 * @property string $functionArn
 * @property string $name
 * @property string $description
 * @property string $dataSourceName
 * @property string $requestMappingTemplate
 * @property string $responseMappingTemplate
 * @property string $functionVersion
 * @property SyncConfig $syncConfig
 * @property int $maxBatchSize
 * @property AppSyncRuntime $runtime
 * @property string $code
 */
class FunctionConfiguration extends Shape
{
    /**
     * @param array{
     *     functionId?: string,
     *     functionArn?: string,
     *     name?: string,
     *     description?: string,
     *     dataSourceName?: string,
     *     requestMappingTemplate?: string,
     *     responseMappingTemplate?: string,
     *     functionVersion?: string,
     *     syncConfig?: SyncConfig,
     *     maxBatchSize?: int,
     *     runtime?: AppSyncRuntime,
     *     code?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
