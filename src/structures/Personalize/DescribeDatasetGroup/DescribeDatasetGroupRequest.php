<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeDatasetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetGroupArn
 */
class DescribeDatasetGroupRequest extends Request
{
    /**
     * @param array{datasetGroupArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
