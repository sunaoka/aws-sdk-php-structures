<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListLicenseServerEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'UNHEALTHY'|'NOT_APPLICABLE'|null $HealthStatus
 * @property string|null $Ipv4Address
 * @property 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED'|null $ProvisioningStatus
 */
class LicenseServer extends Shape
{
    /**
     * @param array{
     *     HealthStatus?: 'HEALTHY'|'UNHEALTHY'|'NOT_APPLICABLE'|null,
     *     Ipv4Address?: string|null,
     *     ProvisioningStatus?: 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
