<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateGrantVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $GrantArn
 * @property string|null $GrantName
 * @property list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'>|null $AllowedOperations
 * @property 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'PENDING_DELETE'|'DISABLED'|'WORKFLOW_COMPLETED'|null $Status
 * @property string|null $StatusReason
 * @property string|null $SourceVersion
 * @property Shapes\Options|null $Options
 */
class CreateGrantVersionRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     GrantArn: string,
     *     GrantName?: string|null,
     *     AllowedOperations?: list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'>|null,
     *     Status?: 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'PENDING_DELETE'|'DISABLED'|'WORKFLOW_COMPLETED'|null,
     *     StatusReason?: string|null,
     *     SourceVersion?: string|null,
     *     Options?: Shapes\Options|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
