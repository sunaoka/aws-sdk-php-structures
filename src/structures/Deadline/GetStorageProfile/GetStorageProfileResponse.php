<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStorageProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $storageProfileId
 * @property string $displayName
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property list<Shapes\FileSystemLocation>|null $fileSystemLocations
 */
class GetStorageProfileResponse extends Response
{
}
