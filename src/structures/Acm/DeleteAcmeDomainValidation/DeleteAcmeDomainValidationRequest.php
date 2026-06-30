<?php

namespace Sunaoka\Aws\Structures\Acm\DeleteAcmeDomainValidation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcmeDomainValidationArn
 */
class DeleteAcmeDomainValidationRequest extends Request
{
    /**
     * @param array{AcmeDomainValidationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
