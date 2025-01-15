<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeDataRepositoryAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $ResourceARN
 * @property string|null $FileSystemId
 * @property 'CREATING'|'AVAILABLE'|'MISCONFIGURED'|'UPDATING'|'DELETING'|'FAILED'|null $Lifecycle
 * @property DataRepositoryFailureDetails|null $FailureDetails
 * @property string|null $FileSystemPath
 * @property string|null $DataRepositoryPath
 * @property bool|null $BatchImportMetaDataOnCreate
 * @property int<1, 512000>|null $ImportedFileChunkSize
 * @property S3DataRepositoryConfiguration|null $S3
 * @property list<Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FileCacheId
 * @property string|null $FileCachePath
 * @property list<string>|null $DataRepositorySubdirectories
 * @property NFSDataRepositoryConfiguration|null $NFS
 */
class DataRepositoryAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     ResourceARN?: string|null,
     *     FileSystemId?: string|null,
     *     Lifecycle?: 'CREATING'|'AVAILABLE'|'MISCONFIGURED'|'UPDATING'|'DELETING'|'FAILED'|null,
     *     FailureDetails?: DataRepositoryFailureDetails|null,
     *     FileSystemPath?: string|null,
     *     DataRepositoryPath?: string|null,
     *     BatchImportMetaDataOnCreate?: bool|null,
     *     ImportedFileChunkSize?: int<1, 512000>|null,
     *     S3?: S3DataRepositoryConfiguration|null,
     *     Tags?: list<Tag>|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     FileCacheId?: string|null,
     *     FileCachePath?: string|null,
     *     DataRepositorySubdirectories?: list<string>|null,
     *     NFS?: NFSDataRepositoryConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
