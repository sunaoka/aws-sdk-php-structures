<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\DescribeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 */
class DescribeDatasetRequest extends Request
{
    /**
     * @param array{DatasetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
