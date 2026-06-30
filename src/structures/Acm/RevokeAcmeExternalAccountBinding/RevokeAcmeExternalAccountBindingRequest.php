<?php

namespace Sunaoka\Aws\Structures\Acm\RevokeAcmeExternalAccountBinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeExternalAccountBindingArn
 */
class RevokeAcmeExternalAccountBindingRequest extends Request
{
    /**
     * @param array{AcmeExternalAccountBindingArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
