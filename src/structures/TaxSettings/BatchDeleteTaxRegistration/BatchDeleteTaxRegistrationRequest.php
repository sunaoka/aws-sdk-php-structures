<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchDeleteTaxRegistration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 */
class BatchDeleteTaxRegistrationRequest extends Request
{
    /**
     * @param array{accountIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
