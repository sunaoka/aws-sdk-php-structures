<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStackProvisioningParameters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 */
class DescribeStackProvisioningParametersRequest extends Request
{
    /**
     * @param array{StackId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
