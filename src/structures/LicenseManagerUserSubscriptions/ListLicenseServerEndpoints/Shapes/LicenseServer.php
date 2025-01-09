<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListLicenseServerEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEALTHY'|'UNHEALTHY'|'NOT_APPLICABLE' $HealthStatus
 * @property string $Ipv4Address
 * @property 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED' $ProvisioningStatus
 */
class LicenseServer extends Shape
{
    /**
     * @param array{
     *     HealthStatus?: 'HEALTHY'|'UNHEALTHY'|'NOT_APPLICABLE',
     *     Ipv4Address?: string,
     *     ProvisioningStatus?: 'PROVISIONING'|'PROVISIONING_FAILED'|'PROVISIONED'|'DELETING'|'DELETION_FAILED'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
