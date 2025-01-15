<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartOrganizationServiceAccessUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OrganizationId
 * @property string|null $OrganizationAwsServiceAccessStatus
 * @property string|null $SLRDeploymentStatus
 * @property list<AccountStatus>|null $AccountStatusList
 */
class OrganizationStatus extends Shape
{
    /**
     * @param array{
     *     OrganizationId?: string|null,
     *     OrganizationAwsServiceAccessStatus?: string|null,
     *     SLRDeploymentStatus?: string|null,
     *     AccountStatusList?: list<AccountStatus>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
