<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateDirectorySetup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'OS' $UpdateType
 * @property Shapes\OSUpdateSettings|null $OSUpdateSettings
 * @property bool|null $CreateSnapshotBeforeUpdate
 */
class UpdateDirectorySetupRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UpdateType: 'OS',
     *     OSUpdateSettings?: Shapes\OSUpdateSettings|null,
     *     CreateSnapshotBeforeUpdate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
