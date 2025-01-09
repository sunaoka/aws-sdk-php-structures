<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateWorkspacesPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property string $Description
 * @property string $BundleId
 * @property string $DirectoryId
 * @property Shapes\Capacity $Capacity
 * @property Shapes\ApplicationSettingsRequest $ApplicationSettings
 * @property Shapes\TimeoutSettings $TimeoutSettings
 */
class UpdateWorkspacesPoolRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     Description?: string,
     *     BundleId?: string,
     *     DirectoryId?: string,
     *     Capacity?: Shapes\Capacity,
     *     ApplicationSettings?: Shapes\ApplicationSettingsRequest,
     *     TimeoutSettings?: Shapes\TimeoutSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
