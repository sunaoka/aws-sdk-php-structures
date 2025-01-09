<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetArn
 */
class DescribeDatasetRequest extends Request
{
    /**
     * @param array{datasetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
