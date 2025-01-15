<?php

namespace Sunaoka\Aws\Structures\NetworkManager\StartOrganizationServiceAccessUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property string|null $SLRDeploymentStatus
 */
class AccountStatus extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     SLRDeploymentStatus?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
