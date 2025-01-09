<?php

namespace Sunaoka\Aws\Structures\Route53Domains\TransferDomainToAnotherAwsAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $AccountId
 */
class TransferDomainToAnotherAwsAccountRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AccountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
