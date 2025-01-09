<?php

namespace Sunaoka\Aws\Structures\Sns\GetEndpointAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 */
class GetEndpointAttributesRequest extends Request
{
    /**
     * @param array{EndpointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
