<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStorageProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $displayName
 * @property list<Shapes\FileSystemLocation>|null $fileSystemLocations
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property string $storageProfileId
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetStorageProfileResponse extends Response
{
}
