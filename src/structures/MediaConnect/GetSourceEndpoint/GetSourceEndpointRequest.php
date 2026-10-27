<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetSourceEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetSourceEndpointRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
