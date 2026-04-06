<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateStorageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string|null $displayName
 * @property string $farmId
 * @property list<Shapes\FileSystemLocation>|null $fileSystemLocationsToAdd
 * @property list<Shapes\FileSystemLocation>|null $fileSystemLocationsToRemove
 * @property 'WINDOWS'|'LINUX'|'MACOS'|null $osFamily
 * @property string $storageProfileId
 */
class UpdateStorageProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     displayName?: string|null,
     *     farmId: string,
     *     fileSystemLocationsToAdd?: list<Shapes\FileSystemLocation>|null,
     *     fileSystemLocationsToRemove?: list<Shapes\FileSystemLocation>|null,
     *     osFamily?: 'WINDOWS'|'LINUX'|'MACOS'|null,
     *     storageProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
