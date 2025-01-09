<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContactMethods;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'Email'|'SMS'> $protocols
 */
class GetContactMethodsRequest extends Request
{
    /**
     * @param array{protocols?: list<'Email'|'SMS'>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
