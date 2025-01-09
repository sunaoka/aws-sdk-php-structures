<?php

namespace Sunaoka\Aws\Structures\Route53Domains\PushDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $Target
 */
class PushDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     Target: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
