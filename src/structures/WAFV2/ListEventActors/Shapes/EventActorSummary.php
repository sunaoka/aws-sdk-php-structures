<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEventActors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventActorId
 * @property string|null $ClientIp
 * @property string|null $TlsFingerprint
 * @property string|null $Asn
 * @property string|null $AsnOrganization
 * @property string|null $Country
 * @property string|null $AuthFingerprint
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property int<0, max>|null $EventCount
 */
class EventActorSummary extends Shape
{
    /**
     * @param array{
     *     EventActorId: string,
     *     ClientIp?: string|null,
     *     TlsFingerprint?: string|null,
     *     Asn?: string|null,
     *     AsnOrganization?: string|null,
     *     Country?: string|null,
     *     AuthFingerprint?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     EventCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
