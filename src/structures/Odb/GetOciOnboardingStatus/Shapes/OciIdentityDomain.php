<?php

namespace Sunaoka\Aws\Structures\Odb\GetOciOnboardingStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ociIdentityDomainId
 * @property string|null $ociIdentityDomainResourceUrl
 * @property string|null $ociIdentityDomainUrl
 * @property 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null $status
 * @property string|null $statusReason
 * @property string|null $accountSetupCloudFormationUrl
 */
class OciIdentityDomain extends Shape
{
    /**
     * @param array{
     *     ociIdentityDomainId?: string|null,
     *     ociIdentityDomainResourceUrl?: string|null,
     *     ociIdentityDomainUrl?: string|null,
     *     status?: 'AVAILABLE'|'FAILED'|'PROVISIONING'|'TERMINATED'|'TERMINATING'|'UPDATING'|'MAINTENANCE_IN_PROGRESS'|null,
     *     statusReason?: string|null,
     *     accountSetupCloudFormationUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
