<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $DatasetType
 */
class DescribeDatasetRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     DatasetType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
