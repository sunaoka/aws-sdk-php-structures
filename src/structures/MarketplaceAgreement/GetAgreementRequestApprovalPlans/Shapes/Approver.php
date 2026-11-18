<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequestApprovalPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmailApprover|null $emailApprover
 * @property ProcurementToolApprover|null $procurementToolApprover
 * @property AwsOrganizationAdminApprover|null $awsOrganizationAdminApprover
 */
class Approver extends Shape
{
    /**
     * @param array{
     *     emailApprover?: EmailApprover|null,
     *     procurementToolApprover?: ProcurementToolApprover|null,
     *     awsOrganizationAdminApprover?: AwsOrganizationAdminApprover|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
