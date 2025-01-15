<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property string $Description
 * @property string $BundleId
 * @property string $DirectoryId
 * @property Shapes\Capacity $Capacity
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\ApplicationSettingsRequest|null $ApplicationSettings
 * @property Shapes\TimeoutSettings|null $TimeoutSettings
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
     *     Tags?: list<Shapes\Tag>|null,
     *     ApplicationSettings?: Shapes\ApplicationSettingsRequest|null,
     *     TimeoutSettings?: Shapes\TimeoutSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
