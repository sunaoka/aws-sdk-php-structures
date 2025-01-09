<?php

namespace Sunaoka\Aws\Structures\Route53Domains\RenewDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int<1, 10> $DurationInYears
 * @property int $CurrentExpiryYear
 */
class RenewDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DurationInYears?: int<1, 10>,
     *     CurrentExpiryYear: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
