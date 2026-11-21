<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneFeatures;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property bool|null $EnableAcceleratedRecovery
 * @property bool|null $EnablePublicDNSFallback
 * @property list<Shapes\ChangeGuardrail>|null $ChangeGuardrails
 * @property bool|null $DryRun
 */
class UpdateHostedZoneFeaturesRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     EnableAcceleratedRecovery?: bool|null,
     *     EnablePublicDNSFallback?: bool|null,
     *     ChangeGuardrails?: list<Shapes\ChangeGuardrail>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
