<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string $ClientRequestToken
 * @property int<0, 2147483647> $StorageCapacity
 * @property Shapes\UpdateFileSystemWindowsConfiguration $WindowsConfiguration
 * @property Shapes\UpdateFileSystemLustreConfiguration $LustreConfiguration
 * @property Shapes\UpdateFileSystemOntapConfiguration $OntapConfiguration
 * @property Shapes\UpdateFileSystemOpenZFSConfiguration $OpenZFSConfiguration
 * @property 'SSD'|'HDD'|'INTELLIGENT_TIERING' $StorageType
 */
class UpdateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     ClientRequestToken?: string,
     *     StorageCapacity?: int<0, 2147483647>,
     *     WindowsConfiguration?: Shapes\UpdateFileSystemWindowsConfiguration,
     *     LustreConfiguration?: Shapes\UpdateFileSystemLustreConfiguration,
     *     OntapConfiguration?: Shapes\UpdateFileSystemOntapConfiguration,
     *     OpenZFSConfiguration?: Shapes\UpdateFileSystemOpenZFSConfiguration,
     *     StorageType?: 'SSD'|'HDD'|'INTELLIGENT_TIERING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
