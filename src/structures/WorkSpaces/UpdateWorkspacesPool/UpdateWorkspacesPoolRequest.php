<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateWorkspacesPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property string|null $Description
 * @property string|null $BundleId
 * @property string|null $DirectoryId
 * @property Shapes\Capacity|null $Capacity
 * @property Shapes\ApplicationSettingsRequest|null $ApplicationSettings
 * @property Shapes\TimeoutSettings|null $TimeoutSettings
 */
class UpdateWorkspacesPoolRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     Description?: string|null,
     *     BundleId?: string|null,
     *     DirectoryId?: string|null,
     *     Capacity?: Shapes\Capacity|null,
     *     ApplicationSettings?: Shapes\ApplicationSettingsRequest|null,
     *     TimeoutSettings?: Shapes\TimeoutSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
