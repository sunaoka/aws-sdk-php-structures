<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\GetAudienceGenerationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3ConfigMap|null $dataSource
 * @property string $roleArn
 * @property ProtectedQuerySQLParameters|null $sqlParameters
 * @property ComputeConfiguration|null $sqlComputeConfiguration
 */
class AudienceGenerationJobDataSource extends Shape
{
    /**
     * @param array{
     *     dataSource?: S3ConfigMap|null,
     *     roleArn: string,
     *     sqlParameters?: ProtectedQuerySQLParameters|null,
     *     sqlComputeConfiguration?: ComputeConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
