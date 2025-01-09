<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainDetail;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property list<Shapes\Nameserver> $Nameservers
 * @property bool $AutoRenew
 * @property Shapes\ContactDetail $AdminContact
 * @property Shapes\ContactDetail $RegistrantContact
 * @property Shapes\ContactDetail $TechContact
 * @property bool $AdminPrivacy
 * @property bool $RegistrantPrivacy
 * @property bool $TechPrivacy
 * @property string $RegistrarName
 * @property string $WhoIsServer
 * @property string $RegistrarUrl
 * @property string $AbuseContactEmail
 * @property string $AbuseContactPhone
 * @property string $RegistryDomainId
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $UpdatedDate
 * @property \Aws\Api\DateTimeResult $ExpirationDate
 * @property string $Reseller
 * @property string $DnsSec
 * @property list<string> $StatusList
 * @property list<Shapes\DnssecKey> $DnssecKeys
 * @property Shapes\ContactDetail $BillingContact
 * @property bool $BillingPrivacy
 */
class GetDomainDetailResponse extends Response
{
}
