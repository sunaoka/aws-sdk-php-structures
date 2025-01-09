<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStorageProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $storageProfileId
 * @property string $displayName
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 * @property list<Shapes\FileSystemLocation> $fileSystemLocations
 */
class GetStorageProfileResponse extends Response
{
}
