<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRDS;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceId
 * @property string $DataSourceName
 * @property Shapes\RDSDataSpec $RDSData
 * @property string $RoleARN
 * @property bool $ComputeStatistics
 */
class CreateDataSourceFromRDSRequest extends Request
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     DataSourceName?: string,
     *     RDSData: Shapes\RDSDataSpec,
     *     RoleARN: string,
     *     ComputeStatistics?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
