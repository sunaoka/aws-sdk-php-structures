<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStorageProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $storageProfileId
 * @property string $displayName
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 */
class StorageProfileSummary extends Shape
{
    /**
     * @param array{
     *     storageProfileId: string,
     *     displayName: string,
     *     osFamily: 'WINDOWS'|'LINUX'|'MACOS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
