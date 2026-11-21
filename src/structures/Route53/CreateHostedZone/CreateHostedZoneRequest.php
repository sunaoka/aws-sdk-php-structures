<?php

namespace Sunaoka\Aws\Structures\Route53\CreateHostedZone;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property Shapes\VPC|null $VPC
 * @property string $CallerReference
 * @property Shapes\HostedZoneConfig|null $HostedZoneConfig
 * @property string|null $DelegationSetId
 * @property bool|null $EnablePublicDNSFallback
 * @property list<Shapes\ChangeGuardrail>|null $ChangeGuardrails
 */
class CreateHostedZoneRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     VPC?: Shapes\VPC|null,
     *     CallerReference: string,
     *     HostedZoneConfig?: Shapes\HostedZoneConfig|null,
     *     DelegationSetId?: string|null,
     *     EnablePublicDNSFallback?: bool|null,
     *     ChangeGuardrails?: list<Shapes\ChangeGuardrail>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
