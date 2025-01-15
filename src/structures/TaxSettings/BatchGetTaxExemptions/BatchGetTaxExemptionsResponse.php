<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string>|null $failedAccounts
 * @property array<string, Shapes\TaxExemptionDetails>|null $taxExemptionDetailsMap
 */
class BatchGetTaxExemptionsResponse extends Response
{
}
