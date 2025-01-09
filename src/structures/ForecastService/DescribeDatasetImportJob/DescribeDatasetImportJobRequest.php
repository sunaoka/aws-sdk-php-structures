<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDatasetImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetImportJobArn
 */
class DescribeDatasetImportJobRequest extends Request
{
    /**
     * @param array{DatasetImportJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
