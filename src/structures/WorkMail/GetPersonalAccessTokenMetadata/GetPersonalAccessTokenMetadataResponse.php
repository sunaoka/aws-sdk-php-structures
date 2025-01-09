<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetPersonalAccessTokenMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PersonalAccessTokenId
 * @property string $UserId
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateLastUsed
 * @property \Aws\Api\DateTimeResult $ExpiresTime
 * @property list<string> $Scopes
 */
class GetPersonalAccessTokenMetadataResponse extends Response
{
}
