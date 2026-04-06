<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateReputationEntityCustomerManagedStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RESOURCE' $ReputationEntityType
 * @property string $ReputationEntityReference
 * @property 'ENABLED'|'REINSTATED'|'DISABLED' $SendingStatus
 */
class UpdateReputationEntityCustomerManagedStatusRequest extends Request
{
    /**
     * @param array{
     *     ReputationEntityType: 'RESOURCE',
     *     ReputationEntityReference: string,
     *     SendingStatus: 'ENABLED'|'REINSTATED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
