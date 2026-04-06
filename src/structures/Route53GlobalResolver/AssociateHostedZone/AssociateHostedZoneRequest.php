<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\AssociateHostedZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $hostedZoneId
 * @property string $resourceArn
 * @property string $name
 */
class AssociateHostedZoneRequest extends Request
{
    /**
     * @param array{
     *     hostedZoneId: string,
     *     resourceArn: string,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
