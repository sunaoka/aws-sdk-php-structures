<?php

namespace Sunaoka\Aws\Structures\TaxSettings\BatchPutTaxRegistration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BatchPutTaxRegistrationError> $errors
 * @property 'Verified'|'Pending'|'Deleted'|'Rejected' $status
 */
class BatchPutTaxRegistrationResponse extends Response
{
}
