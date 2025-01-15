<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetMailDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DnsRecord>|null $Records
 * @property bool|null $IsTestDomain
 * @property bool|null $IsDefault
 * @property 'PENDING'|'VERIFIED'|'FAILED'|null $OwnershipVerificationStatus
 * @property 'PENDING'|'VERIFIED'|'FAILED'|null $DkimVerificationStatus
 */
class GetMailDomainResponse extends Response
{
}
