<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EmailApproverOutcome|null $emailApproverOutcome
 * @property ProcurementToolApproverOutcome|null $procurementToolApproverOutcome
 * @property AwsOrganizationApproverOutcome|null $awsOrganizationApproverOutcome
 */
class ApproverOutcome extends Shape
{
    /**
     * @param array{
     *     emailApproverOutcome?: EmailApproverOutcome|null,
     *     procurementToolApproverOutcome?: ProcurementToolApproverOutcome|null,
     *     awsOrganizationApproverOutcome?: AwsOrganizationApproverOutcome|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
