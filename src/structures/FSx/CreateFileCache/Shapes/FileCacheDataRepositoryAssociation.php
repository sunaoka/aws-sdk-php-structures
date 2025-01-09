<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileCachePath
 * @property string $DataRepositoryPath
 * @property list<string> $DataRepositorySubdirectories
 * @property FileCacheNFSConfiguration $NFS
 */
class FileCacheDataRepositoryAssociation extends Shape
{
    /**
     * @param array{
     *     FileCachePath: string,
     *     DataRepositoryPath: string,
     *     DataRepositorySubdirectories?: list<string>,
     *     NFS?: FileCacheNFSConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
