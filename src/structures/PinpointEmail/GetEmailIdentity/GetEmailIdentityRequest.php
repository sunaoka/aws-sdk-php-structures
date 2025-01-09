<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetEmailIdentity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 */
class GetEmailIdentityRequest extends Request
{
    /**
     * @param array{EmailIdentity: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
