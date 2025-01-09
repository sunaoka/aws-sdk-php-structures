<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetArn
 */
class DescribeDatasetRequest extends Request
{
    /**
     * @param array{DatasetArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
