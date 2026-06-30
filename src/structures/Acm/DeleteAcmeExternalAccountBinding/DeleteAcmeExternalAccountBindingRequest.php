<?php

namespace Sunaoka\Aws\Structures\Acm\DeleteAcmeExternalAccountBinding;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeExternalAccountBindingArn
 */
class DeleteAcmeExternalAccountBindingRequest extends Request
{
    /**
     * @param array{AcmeExternalAccountBindingArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
