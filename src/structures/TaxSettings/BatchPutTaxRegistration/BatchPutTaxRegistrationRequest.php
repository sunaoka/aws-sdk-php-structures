<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property Shapes\TaxRegistrationEntry $taxRegistrationEntry
 */
class BatchPutTaxRegistrationRequest extends Request
{
    /**
     * @param array{
     *     accountIds: list<string>,
     *     taxRegistrationEntry: Shapes\TaxRegistrationEntry
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
