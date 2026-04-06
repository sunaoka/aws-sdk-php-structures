<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateManagedThing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnableAsProvisioner
 * @property bool|null $EnableAsProvisionee
 * @property int<5, 15>|null $TimeoutInMinutes
 */
class WiFiSimpleSetupConfiguration extends Shape
{
    /**
     * @param array{
     *     EnableAsProvisioner?: bool|null,
     *     EnableAsProvisionee?: bool|null,
     *     TimeoutInMinutes?: int<5, 15>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
