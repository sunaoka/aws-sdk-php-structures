<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Verified'|'Pending'|'Deleted'|'Rejected'|null $status
 * @property list<Shapes\BatchPutTaxRegistrationError> $errors
 */
class BatchPutTaxRegistrationResponse extends Response
{
}
