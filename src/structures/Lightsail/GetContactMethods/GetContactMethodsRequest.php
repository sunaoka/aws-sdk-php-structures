<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContactMethods;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'Email'|'SMS'>|null $protocols
 */
class GetContactMethodsRequest extends Request
{
    /**
     * @param array{protocols?: list<'Email'|'SMS'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
