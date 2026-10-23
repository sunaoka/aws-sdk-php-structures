<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $statusCodes
 * @property list<'CONNECTION_ERROR'|'FIRST_BYTE_TIMEOUT'|'UNROUTABLE'>|null $errors
 */
class FallbackTriggers extends Shape
{
    /**
     * @param array{
     *     statusCodes?: list<string>|null,
     *     errors?: list<'CONNECTION_ERROR'|'FIRST_BYTE_TIMEOUT'|'UNROUTABLE'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
