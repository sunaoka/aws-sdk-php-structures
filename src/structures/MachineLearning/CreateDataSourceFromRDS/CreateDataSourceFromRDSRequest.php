<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRDS;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceId
 * @property string|null $DataSourceName
 * @property Shapes\RDSDataSpec $RDSData
 * @property string $RoleARN
 * @property bool|null $ComputeStatistics
 */
class CreateDataSourceFromRDSRequest extends Request
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     DataSourceName?: string|null,
     *     RDSData: Shapes\RDSDataSpec,
     *     RoleARN: string,
     *     ComputeStatistics?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
