<?php

namespace Sunaoka\Aws\Structures\Payments\GetPaymentInstrument;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $identifier
 */
class GetPaymentInstrumentRequest extends Request
{
    /**
     * @param array{identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
