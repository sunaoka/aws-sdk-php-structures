<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $failedAccounts
 * @property array<string, Shapes\TaxExemptionDetails> $taxExemptionDetailsMap
 */
class BatchGetTaxExemptionsResponse extends Response
{
}
