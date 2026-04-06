<?php

namespace Sunaoka\Aws\Structures\Amplify\CreateDomainAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainAssociationArn
 * @property string $domainName
 * @property bool $enableAutoSubDomain
 * @property list<string>|null $autoSubDomainCreationPatterns
 * @property string|null $autoSubDomainIAMRole
 * @property 'PENDING_VERIFICATION'|'IN_PROGRESS'|'AVAILABLE'|'IMPORTING_CUSTOM_CERTIFICATE'|'PENDING_DEPLOYMENT'|'AWAITING_APP_CNAME'|'FAILED'|'CREATING'|'REQUESTING_CERTIFICATE'|'UPDATING' $domainStatus
 * @property 'REQUESTING_CERTIFICATE'|'PENDING_VERIFICATION'|'IMPORTING_CUSTOM_CERTIFICATE'|'PENDING_DEPLOYMENT'|'AWAITING_APP_CNAME'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|null $updateStatus
 * @property string $statusReason
 * @property string|null $certificateVerificationDNSRecord
 * @property list<SubDomain> $subDomains
 * @property Certificate|null $certificate
 */
class DomainAssociation extends Shape
{
    /**
     * @param array{
     *     domainAssociationArn: string,
     *     domainName: string,
     *     enableAutoSubDomain: bool,
     *     autoSubDomainCreationPatterns?: list<string>|null,
     *     autoSubDomainIAMRole?: string|null,
     *     domainStatus: 'PENDING_VERIFICATION'|'IN_PROGRESS'|'AVAILABLE'|'IMPORTING_CUSTOM_CERTIFICATE'|'PENDING_DEPLOYMENT'|'AWAITING_APP_CNAME'|'FAILED'|'CREATING'|'REQUESTING_CERTIFICATE'|'UPDATING',
     *     updateStatus?: 'REQUESTING_CERTIFICATE'|'PENDING_VERIFICATION'|'IMPORTING_CUSTOM_CERTIFICATE'|'PENDING_DEPLOYMENT'|'AWAITING_APP_CNAME'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|null,
     *     statusReason: string,
     *     certificateVerificationDNSRecord?: string|null,
     *     subDomains: list<SubDomain>,
     *     certificate?: Certificate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
