<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetImportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetImportJobArn
 */
class DescribeDatasetImportJobRequest extends Request
{
    /**
     * @param array{datasetImportJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
