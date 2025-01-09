<?php

namespace Sunaoka\Aws\Structures\Route53Domains\RenewDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property int $DurationInYears
 * @property int $CurrentExpiryYear
 */
class RenewDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     DurationInYears?: int,
     *     CurrentExpiryYear: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
