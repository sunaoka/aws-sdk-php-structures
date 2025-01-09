<?php

namespace Sunaoka\Aws\Structures\Redshift\FailoverPrimaryCompute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 */
class FailoverPrimaryComputeRequest extends Request
{
    /**
     * @param array{ClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
