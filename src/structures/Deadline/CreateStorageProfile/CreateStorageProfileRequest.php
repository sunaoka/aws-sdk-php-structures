<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateStorageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $farmId
 * @property string $displayName
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property list<Shapes\FileSystemLocation>|null $fileSystemLocations
 */
class CreateStorageProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     farmId: string,
     *     displayName: string,
     *     osFamily: 'WINDOWS'|'LINUX'|'MACOS',
     *     fileSystemLocations?: list<Shapes\FileSystemLocation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
