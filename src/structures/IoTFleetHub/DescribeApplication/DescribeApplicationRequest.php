<?php

namespace Sunaoka\Aws\Structures\IoTFleetHub\DescribeApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 */
class DescribeApplicationRequest extends Request
{
    /**
     * @param array{applicationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
