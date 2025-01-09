<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMailDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DnsRecord> $Records
 * @property bool $IsTestDomain
 * @property bool $IsDefault
 * @property 'PENDING'|'VERIFIED'|'FAILED' $OwnershipVerificationStatus
 * @property 'PENDING'|'VERIFIED'|'FAILED' $DkimVerificationStatus
 */
class GetMailDomainResponse extends Response
{
}
