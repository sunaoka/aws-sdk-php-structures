<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateStorageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $farmId
 * @property string $storageProfileId
 * @property string $displayName
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property list<Shapes\FileSystemLocation> $fileSystemLocationsToAdd
 * @property list<Shapes\FileSystemLocation> $fileSystemLocationsToRemove
 */
class UpdateStorageProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     farmId: string,
     *     storageProfileId: string,
     *     displayName?: string,
     *     osFamily?: 'WINDOWS'|'LINUX'|'MACOS',
     *     fileSystemLocationsToAdd?: list<Shapes\FileSystemLocation>,
     *     fileSystemLocationsToRemove?: list<Shapes\FileSystemLocation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
