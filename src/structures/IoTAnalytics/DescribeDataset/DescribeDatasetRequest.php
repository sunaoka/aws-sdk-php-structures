<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetName
 */
class DescribeDatasetRequest extends Request
{
    /**
     * @param array{datasetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
