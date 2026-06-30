<?php

namespace Sunaoka\Aws\Structures\Acm\GetAcmeExternalAccountBindingCredentials;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeExternalAccountBindingArn
 */
class GetAcmeExternalAccountBindingCredentialsRequest extends Request
{
    /**
     * @param array{AcmeExternalAccountBindingArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
