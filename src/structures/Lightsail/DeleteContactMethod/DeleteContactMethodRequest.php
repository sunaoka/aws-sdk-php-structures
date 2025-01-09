<?php

namespace Sunaoka\Aws\Structures\Lightsail\DeleteContactMethod;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'Email'|'SMS' $protocol
 */
class DeleteContactMethodRequest extends Request
{
    /**
     * @param array{protocol: 'Email'|'SMS'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
