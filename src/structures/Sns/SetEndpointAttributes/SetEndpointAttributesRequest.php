<?php

namespace Sunaoka\Aws\Structures\Sns\SetEndpointAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 * @property array<string, string> $Attributes
 */
class SetEndpointAttributesRequest extends Request
{
    /**
     * @param array{
     *     EndpointArn: string,
     *     Attributes: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
