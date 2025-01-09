<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeResize;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 */
class DescribeResizeRequest extends Request
{
    /**
     * @param array{ClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
