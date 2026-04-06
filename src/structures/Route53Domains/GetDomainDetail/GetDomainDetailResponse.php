<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetDomainDetail;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainName
 * @property list<Shapes\Nameserver>|null $Nameservers
 * @property bool|null $AutoRenew
 * @property Shapes\ContactDetail|null $AdminContact
 * @property Shapes\ContactDetail|null $RegistrantContact
 * @property Shapes\ContactDetail|null $TechContact
 * @property bool|null $AdminPrivacy
 * @property bool|null $RegistrantPrivacy
 * @property bool|null $TechPrivacy
 * @property string|null $RegistrarName
 * @property string|null $WhoIsServer
 * @property string|null $RegistrarUrl
 * @property string|null $AbuseContactEmail
 * @property string|null $AbuseContactPhone
 * @property string|null $RegistryDomainId
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $UpdatedDate
 * @property \Aws\Api\DateTimeResult|null $ExpirationDate
 * @property string|null $Reseller
 * @property string|null $DnsSec
 * @property list<string>|null $StatusList
 * @property list<Shapes\DnssecKey>|null $DnssecKeys
 * @property Shapes\ContactDetail|null $BillingContact
 * @property bool|null $BillingPrivacy
 */
class GetDomainDetailResponse extends Response
{
}
