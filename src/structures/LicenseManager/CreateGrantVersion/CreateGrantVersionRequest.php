<?php

namespace Sunaoka\Aws\Structures\LicenseManager\CreateGrantVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $GrantArn
 * @property string $GrantName
 * @property list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'> $AllowedOperations
 * @property 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'PENDING_DELETE'|'DISABLED'|'WORKFLOW_COMPLETED' $Status
 * @property string $StatusReason
 * @property string $SourceVersion
 * @property Shapes\Options $Options
 */
class CreateGrantVersionRequest extends Request
{
    /**
     * @param array{
     *     ClientToken: string,
     *     GrantArn: string,
     *     GrantName?: string,
     *     AllowedOperations?: list<'CreateGrant'|'CheckoutLicense'|'CheckoutBorrowLicense'|'CheckInLicense'|'ExtendConsumptionLicense'|'ListPurchasedLicenses'|'CreateToken'>,
     *     Status?: 'PENDING_WORKFLOW'|'PENDING_ACCEPT'|'REJECTED'|'ACTIVE'|'FAILED_WORKFLOW'|'DELETED'|'PENDING_DELETE'|'DISABLED'|'WORKFLOW_COMPLETED',
     *     StatusReason?: string,
     *     SourceVersion?: string,
     *     Options?: Shapes\Options
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
