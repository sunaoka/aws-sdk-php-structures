<?php

namespace Sunaoka\Aws\Structures\Repostspace\GetSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $spaceId
 * @property string $arn
 * @property string $name
 * @property string $status
 * @property 'CONFIGURED'|'UNCONFIGURED' $configurationStatus
 * @property string $clientId
 * @property string|null $identityStoreId
 * @property string|null $applicationArn
 * @property string|null $description
 * @property 'PENDING'|'APPROVED'|'UNAPPROVED' $vanityDomainStatus
 * @property string $vanityDomain
 * @property string $randomDomain
 * @property string|null $customerRoleArn
 * @property \Aws\Api\DateTimeResult $createDateTime
 * @property \Aws\Api\DateTimeResult|null $deleteDateTime
 * @property 'BASIC'|'STANDARD' $tier
 * @property int $storageLimit
 * @property list<string>|null $userAdmins
 * @property list<string>|null $groupAdmins
 * @property array<string, list<'EXPERT'|'MODERATOR'|'ADMINISTRATOR'|'SUPPORTREQUESTOR'>>|null $roles
 * @property string|null $userKMSKey
 * @property int|null $userCount
 * @property int|null $contentSize
 * @property Shapes\SupportedEmailDomainsStatus|null $supportedEmailDomains
 */
class GetSpaceResponse extends Response
{
}
