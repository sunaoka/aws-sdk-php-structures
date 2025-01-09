<?php

namespace Sunaoka\Aws\Structures\Route53\GetDNSSEC;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 */
class GetDNSSECRequest extends Request
{
    /**
     * @param array{HostedZoneId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
