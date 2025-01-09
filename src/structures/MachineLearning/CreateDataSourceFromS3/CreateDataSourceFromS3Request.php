<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceId
 * @property string $DataSourceName
 * @property Shapes\S3DataSpec $DataSpec
 * @property bool $ComputeStatistics
 */
class CreateDataSourceFromS3Request extends Request
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     DataSourceName?: string,
     *     DataSpec: Shapes\S3DataSpec,
     *     ComputeStatistics?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
