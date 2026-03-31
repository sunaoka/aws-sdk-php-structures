<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\UpdateTargetDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetDomainId
 * @property 'DNS_TXT'|'HTTP_ROUTE' $verificationMethod
 */
class UpdateTargetDomainRequest extends Request
{
    /**
     * @param array{
     *     targetDomainId: string,
     *     verificationMethod: 'DNS_TXT'|'HTTP_ROUTE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
