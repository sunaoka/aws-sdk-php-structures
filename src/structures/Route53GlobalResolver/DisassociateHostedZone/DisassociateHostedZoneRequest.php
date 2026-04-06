<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\DisassociateHostedZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $hostedZoneId
 * @property string $resourceArn
 */
class DisassociateHostedZoneRequest extends Request
{
    /**
     * @param array{
     *     hostedZoneId: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
