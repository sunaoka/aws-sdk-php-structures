<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateStorageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $storageProfileId
 * @property string|null $displayName
 * @property 'WINDOWS'|'LINUX'|'MACOS'|null $osFamily
 * @property list<Shapes\FileSystemLocation>|null $fileSystemLocationsToAdd
 * @property list<Shapes\FileSystemLocation>|null $fileSystemLocationsToRemove
 */
class UpdateStorageProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     storageProfileId: string,
     *     displayName?: string|null,
     *     osFamily?: 'WINDOWS'|'LINUX'|'MACOS'|null,
     *     fileSystemLocationsToAdd?: list<Shapes\FileSystemLocation>|null,
     *     fileSystemLocationsToRemove?: list<Shapes\FileSystemLocation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
