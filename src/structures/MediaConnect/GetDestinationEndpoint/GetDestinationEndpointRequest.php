<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetDestinationEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 */
class GetDestinationEndpointRequest extends Request
{
    /**
     * @param array{Arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
