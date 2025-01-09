<?php

namespace Sunaoka\Aws\Structures\Route53Domains\CheckDomainAvailability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $IdnLangCode
 */
class CheckDomainAvailabilityRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     IdnLangCode?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
