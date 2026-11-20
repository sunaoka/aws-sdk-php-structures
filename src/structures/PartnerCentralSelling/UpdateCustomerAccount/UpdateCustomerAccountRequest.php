<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateCustomerAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $Identifier
 * @property Shapes\CustomerAccountData $Account
 * @property string|null $PartnerAccountIdentifier
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 */
class UpdateCustomerAccountRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Identifier: string,
     *     Account: Shapes\CustomerAccountData,
     *     PartnerAccountIdentifier?: string|null,
     *     LastModifiedDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
