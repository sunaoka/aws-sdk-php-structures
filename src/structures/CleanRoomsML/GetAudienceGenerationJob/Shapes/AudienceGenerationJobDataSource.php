<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ConfigMap $dataSource
 * @property string $roleArn
 * @property ProtectedQuerySQLParameters $sqlParameters
 * @property ComputeConfiguration $sqlComputeConfiguration
 */
class AudienceGenerationJobDataSource extends Shape
{
    /**
     * @param array{
     *     dataSource?: S3ConfigMap,
     *     roleArn: string,
     *     sqlParameters?: ProtectedQuerySQLParameters,
     *     sqlComputeConfiguration?: ComputeConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
