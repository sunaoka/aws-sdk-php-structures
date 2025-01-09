<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRedshift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceId
 * @property string $DataSourceName
 * @property Shapes\RedshiftDataSpec $DataSpec
 * @property string $RoleARN
 * @property bool $ComputeStatistics
 */
class CreateDataSourceFromRedshiftRequest extends Request
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     DataSourceName?: string,
     *     DataSpec: Shapes\RedshiftDataSpec,
     *     RoleARN: string,
     *     ComputeStatistics?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
