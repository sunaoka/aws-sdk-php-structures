<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property Shapes\TaxRegistrationEntry $taxRegistrationEntry
 */
class PutTaxRegistrationRequest extends Request
{
    /**
     * @param array{
     *     accountId?: string,
     *     taxRegistrationEntry: Shapes\TaxRegistrationEntry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
