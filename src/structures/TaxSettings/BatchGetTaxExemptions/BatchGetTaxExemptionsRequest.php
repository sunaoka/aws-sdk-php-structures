<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 */
class BatchGetTaxExemptionsRequest extends Request
{
    /**
     * @param array{accountIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
