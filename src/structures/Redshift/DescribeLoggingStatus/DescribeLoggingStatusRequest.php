<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeLoggingStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 */
class DescribeLoggingStatusRequest extends Request
{
    /**
     * @param array{ClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
