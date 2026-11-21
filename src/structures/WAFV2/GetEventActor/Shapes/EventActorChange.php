<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetEventActor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ChangeTime
 * @property string|null $ClientIp
 * @property string|null $TlsFingerprint
 * @property string|null $Asn
 * @property string|null $AsnOrganization
 * @property string|null $Country
 */
class EventActorChange extends Shape
{
    /**
     * @param array{
     *     ChangeTime?: \Aws\Api\DateTimeResult|null,
     *     ClientIp?: string|null,
     *     TlsFingerprint?: string|null,
     *     Asn?: string|null,
     *     AsnOrganization?: string|null,
     *     Country?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
