<?php

namespace Sunaoka\Aws\Structures\Invoicing\BatchGetInvoiceProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIds
 */
class BatchGetInvoiceProfileRequest extends Request
{
    /**
     * @param array{AccountIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
