<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\CreateTargetDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $targetDomainName
 * @property 'DNS_TXT'|'HTTP_ROUTE' $verificationMethod
 * @property array<string, string>|null $tags
 */
class CreateTargetDomainRequest extends Request
{
    /**
     * @param array{
     *     targetDomainName: string,
     *     verificationMethod: 'DNS_TXT'|'HTTP_ROUTE',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
