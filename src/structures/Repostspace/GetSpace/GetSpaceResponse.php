<?php

namespace Sunaoka\Aws\Structures\Repostspace\GetSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $clientId
 * @property 'CONFIGURED'|'UNCONFIGURED' $configurationStatus
 * @property int $contentSize
 * @property \Aws\Api\DateTimeResult $createDateTime
 * @property string $customerRoleArn
 * @property \Aws\Api\DateTimeResult $deleteDateTime
 * @property string $description
 * @property list<string> $groupAdmins
 * @property string $name
 * @property string $randomDomain
 * @property array<string, list<'EXPERT'|'MODERATOR'|'ADMINISTRATOR'|'SUPPORTREQUESTOR'>> $roles
 * @property string $spaceId
 * @property string $status
 * @property int $storageLimit
 * @property 'BASIC'|'STANDARD' $tier
 * @property list<string> $userAdmins
 * @property int $userCount
 * @property string $userKMSKey
 * @property string $vanityDomain
 * @property 'PENDING'|'APPROVED'|'UNAPPROVED' $vanityDomainStatus
 */
class GetSpaceResponse extends Response
{
}
