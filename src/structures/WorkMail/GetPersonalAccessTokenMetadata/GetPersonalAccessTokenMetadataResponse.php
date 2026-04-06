<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetPersonalAccessTokenMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PersonalAccessTokenId
 * @property string|null $UserId
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateLastUsed
 * @property \Aws\Api\DateTimeResult|null $ExpiresTime
 * @property list<string>|null $Scopes
 */
class GetPersonalAccessTokenMetadataResponse extends Response
{
}
