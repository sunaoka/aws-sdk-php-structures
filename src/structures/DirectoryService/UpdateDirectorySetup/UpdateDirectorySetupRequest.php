<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateDirectorySetup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'OS' $UpdateType
 * @property Shapes\OSUpdateSettings $OSUpdateSettings
 * @property bool $CreateSnapshotBeforeUpdate
 */
class UpdateDirectorySetupRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UpdateType: 'OS',
     *     OSUpdateSettings?: Shapes\OSUpdateSettings,
     *     CreateSnapshotBeforeUpdate?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
