<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListOrganizationServiceAccessStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OrganizationId
 * @property string $OrganizationAwsServiceAccessStatus
 * @property string $SLRDeploymentStatus
 * @property list<AccountStatus> $AccountStatusList
 */
class OrganizationStatus extends Shape
{
    /**
     * @param array{
     *     OrganizationId?: string,
     *     OrganizationAwsServiceAccessStatus?: string,
     *     SLRDeploymentStatus?: string,
     *     AccountStatusList?: list<AccountStatus>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
