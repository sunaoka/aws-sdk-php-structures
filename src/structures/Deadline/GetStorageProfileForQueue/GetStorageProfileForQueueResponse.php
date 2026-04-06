<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStorageProfileForQueue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $storageProfileId
 * @property string $displayName
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property list<Shapes\FileSystemLocation>|null $fileSystemLocations
 */
class GetStorageProfileForQueueResponse extends Response
{
}
