<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ResendContactReachabilityEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainName
 */
class ResendContactReachabilityEmailRequest extends Request
{
    /**
     * @param array{domainName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
