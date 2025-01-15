<?php

namespace Sunaoka\Aws\Structures\MachineLearning\CreateDataSourceFromS3;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataSourceId
 * @property string|null $DataSourceName
 * @property Shapes\S3DataSpec $DataSpec
 * @property bool|null $ComputeStatistics
 */
class CreateDataSourceFromS3Request extends Request
{
    /**
     * @param array{
     *     DataSourceId: string,
     *     DataSourceName?: string|null,
     *     DataSpec: Shapes\S3DataSpec,
     *     ComputeStatistics?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
