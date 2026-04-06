<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStorageProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $displayName
 * @property 'WINDOWS'|'LINUX'|'MACOS' $osFamily
 * @property string $storageProfileId
 */
class StorageProfileSummary extends Shape
{
    /**
     * @param array{
     *     displayName: string,
     *     osFamily: 'WINDOWS'|'LINUX'|'MACOS',
     *     storageProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
