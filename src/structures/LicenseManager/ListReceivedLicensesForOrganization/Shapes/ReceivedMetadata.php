<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedLicensesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'DISABLED'|'WORKFLOW_COMPLETED'|null $ReceivedStatus
 * @property string|null $ReceivedStatusReason
 * @property list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'>|null $AllowedOperations
 */
class ReceivedMetadata extends Shape
{
    /**
     * @param array{
     *     ReceivedStatus?: 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'DISABLED'|'WORKFLOW_COMPLETED'|null,
     *     ReceivedStatusReason?: string|null,
     *     AllowedOperations?: list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
