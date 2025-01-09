<?php

namespace Sunaoka\Aws\Structures\Rds\DisableHttpEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DisableHttpEndpointRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
