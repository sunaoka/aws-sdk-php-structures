<?php

namespace Sunaoka\Aws\Structures\LicenseManager\ListReceivedGrantsForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GrantArn
 * @property string $GrantName
 * @property string $ParentArn
 * @property string $LicenseArn
 * @property string $GranteePrincipalArn
 * @property string $HomeRegion
 * @property 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'PENDING_DELETE'|'DISABLED'|'WORKFLOW_COMPLETED' $GrantStatus
 * @property string|null $StatusReason
 * @property string $Version
 * @property list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'> $GrantedOperations
 * @property Options|null $Options
 */
class Grant extends Shape
{
    /**
     * @param array{
     *     GrantArn: string,
     *     GrantName: string,
     *     ParentArn: string,
     *     LicenseArn: string,
     *     GranteePrincipalArn: string,
     *     HomeRegion: string,
     *     GrantStatus: 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'PENDING_DELETE'|'DISABLED'|'WORKFLOW_COMPLETED',
     *     StatusReason?: string|null,
     *     Version: string,
     *     GrantedOperations: list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'>,
     *     Options?: Options|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
