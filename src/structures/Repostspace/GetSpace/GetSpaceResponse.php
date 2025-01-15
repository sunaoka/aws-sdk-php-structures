<?php

namespace Sunaoka\Aws\Structures\Repostspace\GetSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $clientId
 * @property 'CONFIGURED'|'UNCONFIGURED' $configurationStatus
 * @property int|null $contentSize
 * @property \Aws\Api\DateTimeResult $createDateTime
 * @property string|null $customerRoleArn
 * @property \Aws\Api\DateTimeResult|null $deleteDateTime
 * @property string|null $description
 * @property list<string>|null $groupAdmins
 * @property string $name
 * @property string $randomDomain
 * @property array<string, list<'EXPERT'|'MODERATOR'|'ADMINISTRATOR'|'SUPPORTREQUESTOR'>>|null $roles
 * @property string $spaceId
 * @property string $status
 * @property int $storageLimit
 * @property 'BASIC'|'STANDARD' $tier
 * @property list<string>|null $userAdmins
 * @property int|null $userCount
 * @property string|null $userKMSKey
 * @property string $vanityDomain
 * @property 'PENDING'|'APPROVED'|'UNAPPROVED' $vanityDomainStatus
 */
class GetSpaceResponse extends Response
{
}
