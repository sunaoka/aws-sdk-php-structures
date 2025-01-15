<?php

namespace Sunaoka\Aws\Structures\Panorama\ProvisionDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Description
 * @property string $Name
 * @property Shapes\NetworkPayload|null $NetworkingConfiguration
 * @property array<string, string>|null $Tags
 */
class ProvisionDeviceRequest extends Request
{
    /**
     * @param array{
     *     Description?: string|null,
     *     Name: string,
     *     NetworkingConfiguration?: Shapes\NetworkPayload|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
