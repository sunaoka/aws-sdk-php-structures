<?php

namespace Sunaoka\Aws\Structures\Route53Domains\CancelDomainTransferToAnotherAwsAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class CancelDomainTransferToAnotherAwsAccountRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
