<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DisableDNSView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dnsViewId
 */
class DisableDNSViewRequest extends Request
{
    /**
     * @param array{dnsViewId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
