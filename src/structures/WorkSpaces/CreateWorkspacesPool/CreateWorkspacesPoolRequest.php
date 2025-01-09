<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property string $Description
 * @property string $BundleId
 * @property string $DirectoryId
 * @property Shapes\Capacity $Capacity
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\ApplicationSettingsRequest $ApplicationSettings
 * @property Shapes\TimeoutSettings $TimeoutSettings
 */
class CreateWorkspacesPoolRequest extends Request
{
    /**
     * @param array{
     *     PoolName: string,
     *     Description: string,
     *     BundleId: string,
     *     DirectoryId: string,
     *     Capacity: Shapes\Capacity,
     *     Tags?: list<Shapes\Tag>,
     *     ApplicationSettings?: Shapes\ApplicationSettingsRequest,
     *     TimeoutSettings?: Shapes\TimeoutSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
