<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateCustomerAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property Shapes\CustomerAccountData $Account
 * @property string|null $PartnerAccountIdentifier
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 */
class CreateCustomerAccountRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     Account: Shapes\CustomerAccountData,
     *     PartnerAccountIdentifier?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
