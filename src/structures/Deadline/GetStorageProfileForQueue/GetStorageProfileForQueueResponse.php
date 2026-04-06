<?php

namespace Sunaoka\Aws\Structures\Deadline\GetStorageProfileForQueue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $displayName
 * @property list<Shapes\FileSystemLocation>|null $fileSystemLocations
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property string $storageProfileId
 */
class GetStorageProfileForQueueResponse extends Response
{
}
