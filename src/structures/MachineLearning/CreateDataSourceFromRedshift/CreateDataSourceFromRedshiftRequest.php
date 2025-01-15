<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromRedshift;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceId
 * @property string|null $DataSourceName
 * @property Shapes\RedshiftDataSpec $DataSpec
 * @property string $RoleARN
 * @property bool|null $ComputeStatistics
 */
class CreateDataSourceFromRedshiftRequest extends Request
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     DataSourceName?: string|null,
     *     DataSpec: Shapes\RedshiftDataSpec,
     *     RoleARN: string,
     *     ComputeStatistics?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
