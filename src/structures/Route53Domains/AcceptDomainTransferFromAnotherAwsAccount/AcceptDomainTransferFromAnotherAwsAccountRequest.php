<?php

namespace Sunaoka\Aws\Structures\Route53Domains\AcceptDomainTransferFromAnotherAwsAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Password
 */
class AcceptDomainTransferFromAnotherAwsAccountRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Password: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
