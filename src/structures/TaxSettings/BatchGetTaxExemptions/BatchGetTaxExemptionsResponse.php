<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchGetTaxExemptions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\TaxExemptionDetails>|null $taxExemptionDetailsMap
 * @property list<string>|null $failedAccounts
 */
class BatchGetTaxExemptionsResponse extends Response
{
}
