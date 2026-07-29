<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeLoggingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $workspaceName
 */
class DescribeLoggingOptionsRequest extends Request
{
    /**
     * @param array{workspaceName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
