<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeVpcConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcConnectorArn
 */
class DescribeVpcConnectorRequest extends Request
{
    /**
     * @param array{VpcConnectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
