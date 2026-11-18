<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementApproval\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $note
 * @property 'QUEUED'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'EXPIRED'|'SKIPPED' $status
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $approverOutcomeId
 * @property string $name
 * @property list<AgreementApprovalPurchaseOrder>|null $purchaseOrders
 * @property CallerIdentity|null $overriddenBy
 */
class ProcurementToolApproverOutcome extends Shape
{
    /**
     * @param array{
     *     note?: string|null,
     *     status: 'QUEUED'|'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'EXPIRED'|'SKIPPED',
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     approverOutcomeId?: string|null,
     *     name: string,
     *     purchaseOrders?: list<AgreementApprovalPurchaseOrder>|null,
     *     overriddenBy?: CallerIdentity|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
