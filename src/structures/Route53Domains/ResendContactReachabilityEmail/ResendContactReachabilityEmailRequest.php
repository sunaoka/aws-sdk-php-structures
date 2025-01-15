<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ResendContactReachabilityEmail;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $domainName
 */
class ResendContactReachabilityEmailRequest extends Request
{
    /**
     * @param array{domainName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
