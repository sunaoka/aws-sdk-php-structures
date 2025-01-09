<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PhoneNumberValidate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\NumberValidateRequest $NumberValidateRequest
 */
class PhoneNumberValidateRequest extends Request
{
    /**
     * @param array{NumberValidateRequest: Shapes\NumberValidateRequest} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
