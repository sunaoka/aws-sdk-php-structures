<?php

namespace Sunaoka\Aws\Structures\Route53\EnableHostedZoneDNSSEC;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 */
class EnableHostedZoneDNSSECRequest extends Request
{
    /**
     * @param array{HostedZoneId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
