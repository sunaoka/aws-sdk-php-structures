<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileSystem;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string|null $ClientRequestToken
 * @property int<0, 2147483647>|null $StorageCapacity
 * @property Shapes\UpdateFileSystemWindowsConfiguration|null $WindowsConfiguration
 * @property Shapes\UpdateFileSystemLustreConfiguration|null $LustreConfiguration
 * @property Shapes\UpdateFileSystemOntapConfiguration|null $OntapConfiguration
 * @property Shapes\UpdateFileSystemOpenZFSConfiguration|null $OpenZFSConfiguration
 * @property 'SSD'|'HDD'|'INTELLIGENT_TIERING'|null $StorageType
 * @property string|null $FileSystemTypeVersion
 */
class UpdateFileSystemRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     ClientRequestToken?: string|null,
     *     StorageCapacity?: int<0, 2147483647>|null,
     *     WindowsConfiguration?: Shapes\UpdateFileSystemWindowsConfiguration|null,
     *     LustreConfiguration?: Shapes\UpdateFileSystemLustreConfiguration|null,
     *     OntapConfiguration?: Shapes\UpdateFileSystemOntapConfiguration|null,
     *     OpenZFSConfiguration?: Shapes\UpdateFileSystemOpenZFSConfiguration|null,
     *     StorageType?: 'SSD'|'HDD'|'INTELLIGENT_TIERING'|null,
     *     FileSystemTypeVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
