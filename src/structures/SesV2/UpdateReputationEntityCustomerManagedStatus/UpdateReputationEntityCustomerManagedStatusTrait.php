<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateReputationEntityCustomerManagedStatus;

trait UpdateReputationEntityCustomerManagedStatusTrait
{
    /**
     * @param UpdateReputationEntityCustomerManagedStatusRequest $args
     * @return UpdateReputationEntityCustomerManagedStatusResponse
     */
    public function updateReputationEntityCustomerManagedStatus(
        UpdateReputationEntityCustomerManagedStatusRequest $args,
    ) {
        $result = parent::updateReputationEntityCustomerManagedStatus($args->toArray());
        return new UpdateReputationEntityCustomerManagedStatusResponse($result->toArray());
    }
}
