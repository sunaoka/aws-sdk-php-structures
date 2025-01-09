<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeDataset;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeDatasetRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
