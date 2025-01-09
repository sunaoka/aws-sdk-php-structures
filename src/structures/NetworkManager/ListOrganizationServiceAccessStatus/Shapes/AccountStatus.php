<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListOrganizationServiceAccessStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property string $SLRDeploymentStatus
 */
class AccountStatus extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     SLRDeploymentStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
