<?php

namespace Sunaoka\Aws\Structures\Rds\EnableHttpEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class EnableHttpEndpointRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
