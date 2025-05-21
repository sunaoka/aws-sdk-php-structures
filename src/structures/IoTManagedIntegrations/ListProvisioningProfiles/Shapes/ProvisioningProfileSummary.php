<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\ListProvisioningProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Id
 * @property string|null $Arn
 * @property 'FLEET_PROVISIONING'|'JITR'|null $ProvisioningType
 */
class ProvisioningProfileSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Id?: string|null,
     *     Arn?: string|null,
     *     ProvisioningType?: 'FLEET_PROVISIONING'|'JITR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
