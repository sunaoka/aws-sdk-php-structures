<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\PutConnectInstanceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainArn
 * @property array<'Campaign-Email'|'Campaign-SMS'|'Campaign-Telephony'|'Campaign-Orchestration'|'Campaign-WhatsApp', string> $objectTypeNames
 */
class CustomerProfilesIntegrationConfig extends Shape
{
    /**
     * @param array{
     *     domainArn: string,
     *     objectTypeNames: array<'Campaign-Email'|'Campaign-SMS'|'Campaign-Telephony'|'Campaign-Orchestration'|'Campaign-WhatsApp', string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
