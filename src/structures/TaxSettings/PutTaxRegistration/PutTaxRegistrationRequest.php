<?php

namespace Sunaoka\Aws\Structures\TaxSettings\PutTaxRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $accountId
 * @property Shapes\TaxRegistrationEntry $taxRegistrationEntry
 */
class PutTaxRegistrationRequest extends Request
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     taxRegistrationEntry: Shapes\TaxRegistrationEntry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
