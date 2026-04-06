<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateDirectorySetup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property 'OS'|'NETWORK'|'SIZE' $UpdateType
 * @property Shapes\OSUpdateSettings|null $OSUpdateSettings
 * @property Shapes\DirectorySizeUpdateSettings|null $DirectorySizeUpdateSettings
 * @property Shapes\NetworkUpdateSettings|null $NetworkUpdateSettings
 * @property bool|null $CreateSnapshotBeforeUpdate
 */
class UpdateDirectorySetupRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     UpdateType: 'OS'|'NETWORK'|'SIZE',
     *     OSUpdateSettings?: Shapes\OSUpdateSettings|null,
     *     DirectorySizeUpdateSettings?: Shapes\DirectorySizeUpdateSettings|null,
     *     NetworkUpdateSettings?: Shapes\NetworkUpdateSettings|null,
     *     CreateSnapshotBeforeUpdate?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
