<?php

namespace Sunaoka\Aws\Structures\Route53Domains\RejectDomainTransferFromAnotherAwsAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 */
class RejectDomainTransferFromAnotherAwsAccountRequest extends Request
{
    /**
     * @param array{DomainName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
