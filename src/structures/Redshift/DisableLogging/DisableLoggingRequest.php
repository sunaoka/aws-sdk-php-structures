<?php

namespace Sunaoka\Aws\Structures\Redshift\DisableLogging;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 */
class DisableLoggingRequest extends Request
{
    /**
     * @param array{ClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
