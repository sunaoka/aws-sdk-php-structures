<?php

namespace Sunaoka\Aws\Structures\Route53\UpdateHostedZoneFeatures;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HostedZoneId
 * @property bool|null $EnableAcceleratedRecovery
 */
class UpdateHostedZoneFeaturesRequest extends Request
{
    /**
     * @param array{
     *     HostedZoneId: string,
     *     EnableAcceleratedRecovery?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
