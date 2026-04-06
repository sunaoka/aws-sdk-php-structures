<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $executionId
 */
class DescribeExecutionRequest extends Request
{
    /**
     * @param array{executionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
