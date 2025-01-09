<?php

namespace Sunaoka\Aws\Structures\Amplify\DeleteDomainAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainAssociationArn
 * @property string $domainName
 * @property bool $enableAutoSubDomain
 * @property list<string> $autoSubDomainCreationPatterns
 * @property string $autoSubDomainIAMRole
 * @property 'PENDING_VERIFICATION'|'IN_PROGRESS'|'AVAILABLE'|'IMPORTING_CUSTOM_CERTIFICATE'|'PENDING_DEPLOYMENT'|'AWAITING_APP_CNAME'|'FAILED'|'CREATING'|'REQUESTING_CERTIFICATE'|'UPDATING' $domainStatus
 * @property 'REQUESTING_CERTIFICATE'|'PENDING_VERIFICATION'|'IMPORTING_CUSTOM_CERTIFICATE'|'PENDING_DEPLOYMENT'|'AWAITING_APP_CNAME'|'UPDATE_COMPLETE'|'UPDATE_FAILED' $updateStatus
 * @property string $statusReason
 * @property string $certificateVerificationDNSRecord
 * @property list<SubDomain> $subDomains
 * @property Certificate $certificate
 */
class DomainAssociation extends Shape
{
    /**
     * @param array{
     *     domainAssociationArn: string,
     *     domainName: string,
     *     enableAutoSubDomain: bool,
     *     autoSubDomainCreationPatterns?: list<string>,
     *     autoSubDomainIAMRole?: string,
     *     domainStatus: 'PENDING_VERIFICATION'|'IN_PROGRESS'|'AVAILABLE'|'IMPORTING_CUSTOM_CERTIFICATE'|'PENDING_DEPLOYMENT'|'AWAITING_APP_CNAME'|'FAILED'|'CREATING'|'REQUESTING_CERTIFICATE'|'UPDATING',
     *     updateStatus?: 'REQUESTING_CERTIFICATE'|'PENDING_VERIFICATION'|'IMPORTING_CUSTOM_CERTIFICATE'|'PENDING_DEPLOYMENT'|'AWAITING_APP_CNAME'|'UPDATE_COMPLETE'|'UPDATE_FAILED',
     *     statusReason: string,
     *     certificateVerificationDNSRecord?: string,
     *     subDomains: list<SubDomain>,
     *     certificate?: Certificate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
