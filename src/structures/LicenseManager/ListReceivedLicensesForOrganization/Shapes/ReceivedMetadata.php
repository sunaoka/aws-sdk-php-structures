<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedLicensesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'DISABLED'|'WORKFLOW_COMPLETED' $ReceivedStatus
 * @property string $ReceivedStatusReason
 * @property list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'> $AllowedOperations
 */
class ReceivedMetadata extends Shape
{
    /**
     * @param array{
     *     ReceivedStatus?: 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'DISABLED'|'WORKFLOW_COMPLETED',
     *     ReceivedStatusReason?: string,
     *     AllowedOperations?: list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
