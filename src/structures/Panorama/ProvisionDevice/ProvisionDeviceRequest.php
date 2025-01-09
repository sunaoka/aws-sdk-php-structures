<?php

namespace Sunaoka\Aws\Structures\Panorama\ProvisionDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property string $Name
 * @property Shapes\NetworkPayload $NetworkingConfiguration
 * @property array<string, string> $Tags
 */
class ProvisionDeviceRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Name: string,
     *     NetworkingConfiguration?: Shapes\NetworkPayload,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
