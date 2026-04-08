<?php

namespace Sunaoka\Aws\Structures\Outposts\CreateRenewal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT' $PaymentOption
 * @property 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS' $PaymentTerm
 * @property string $OutpostIdentifier
 * @property string|null $ClientToken
 */
class CreateRenewalRequest extends Request
{
    /**
     * @param array{
     *     PaymentOption: 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT',
     *     PaymentTerm: 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS',
     *     OutpostIdentifier: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
