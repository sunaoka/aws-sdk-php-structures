<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeVpcConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class DescribeVpcConnectionRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
