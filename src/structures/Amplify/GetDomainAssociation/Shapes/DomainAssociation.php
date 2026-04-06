<?php

namespace Sunaoka\Aws\Structures\Amplify\GetDomainAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainAssociationArn
 * @property string $domainName
 * @property bool $enableAutoSubDomain
 * @property list<string>|null $autoSubDomainCreationPatterns
 * @property string|null $autoSubDomainIAMRole
 * @property 'PENDING_VERIFICATION'|'IN_PROGRESS'|'AVAILABLE'|'PENDING_DEPLOYMENT'|'FAILED'|'CREATING'|'REQUESTING_CERTIFICATE'|'UPDATING' $domainStatus
 * @property string $statusReason
 * @property string|null $certificateVerificationDNSRecord
 * @property list<SubDomain> $subDomains
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
     *     domainStatus: 'PENDING_VERIFICATION'|'IN_PROGRESS'|'AVAILABLE'|'PENDING_DEPLOYMENT'|'FAILED'|'CREATING'|'REQUESTING_CERTIFICATE'|'UPDATING',
     *     statusReason: string,
     *     certificateVerificationDNSRecord?: string|null,
     *     subDomains: list<SubDomain>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
