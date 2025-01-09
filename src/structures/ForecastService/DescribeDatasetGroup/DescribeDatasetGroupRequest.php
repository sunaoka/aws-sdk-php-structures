<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeDatasetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetGroupArn
 */
class DescribeDatasetGroupRequest extends Request
{
    /**
     * @param array{DatasetGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
