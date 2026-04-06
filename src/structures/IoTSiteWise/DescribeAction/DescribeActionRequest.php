<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $actionId
 */
class DescribeActionRequest extends Request
{
    /**
     * @param array{actionId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
