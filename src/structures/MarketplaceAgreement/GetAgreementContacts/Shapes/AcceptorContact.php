<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $firstName
 * @property string $lastName
 * @property string $emailAddress
 * @property string $companyName
 * @property string $countryCode
 */
class AcceptorContact extends Shape
{
    /**
     * @param array{
     *     firstName: string,
     *     lastName: string,
     *     emailAddress: string,
     *     companyName: string,
     *     countryCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
