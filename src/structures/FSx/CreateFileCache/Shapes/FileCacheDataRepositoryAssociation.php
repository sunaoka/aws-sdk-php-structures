<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileCachePath
 * @property string $DataRepositoryPath
 * @property list<string>|null $DataRepositorySubdirectories
 * @property FileCacheNFSConfiguration|null $NFS
 */
class FileCacheDataRepositoryAssociation extends Shape
{
    /**
     * @param array{
     *     FileCachePath: string,
     *     DataRepositoryPath: string,
     *     DataRepositorySubdirectories?: list<string>|null,
     *     NFS?: FileCacheNFSConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
