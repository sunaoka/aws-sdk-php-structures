<?php

namespace Sunaoka\Aws\Structures\Route53Domains\RestoreDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\Consent|null $Consent
 */
class RestoreDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Consent?: Shapes\Consent|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
