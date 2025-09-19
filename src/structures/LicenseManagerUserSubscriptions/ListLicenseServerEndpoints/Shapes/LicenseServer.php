<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListLicenseServerEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED'|null $ProvisioningStatus
 * @property 'HEALTHY'|'UNHEALTHY'|'NOT_APPLICABLE'|null $HealthStatus
 * @property string|null $Ipv4Address
 */
class LicenseServer extends Shape
{
    /**
     * @param array{
     *     ProvisioningStatus?: 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED'|null,
     *     HealthStatus?: 'HEALTHY'|'UNHEALTHY'|'NOT_APPLICABLE'|null,
     *     Ipv4Address?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
