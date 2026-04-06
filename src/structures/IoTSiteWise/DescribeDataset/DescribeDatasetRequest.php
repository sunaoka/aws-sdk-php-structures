<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetId
 */
class DescribeDatasetRequest extends Request
{
    /**
     * @param array{datasetId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
