<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetExportJobArn
 */
class DescribeDatasetExportJobRequest extends Request
{
    /**
     * @param array{datasetExportJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
