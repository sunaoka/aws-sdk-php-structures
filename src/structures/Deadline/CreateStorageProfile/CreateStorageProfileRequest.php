<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateStorageProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $displayName
 * @property string $farmId
 * @property list<Shapes\FileSystemLocation>|null $fileSystemLocations
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 */
class CreateStorageProfileRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     displayName: string,
     *     farmId: string,
     *     fileSystemLocations?: list<Shapes\FileSystemLocation>|null,
     *     osFamily: 'WINDOWS'|'LINUX'|'MACOS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
