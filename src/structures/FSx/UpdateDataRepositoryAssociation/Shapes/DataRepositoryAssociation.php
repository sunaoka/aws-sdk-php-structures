<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateDataRepositoryAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $ResourceARN
 * @property string $FileSystemId
 * @property 'CREATING'|'AVAILABLE'|'MISCONFIGURED'|'UPDATING'|'DELETING'|'FAILED' $Lifecycle
 * @property DataRepositoryFailureDetails $FailureDetails
 * @property string $FileSystemPath
 * @property string $DataRepositoryPath
 * @property bool $BatchImportMetaDataOnCreate
 * @property int $ImportedFileChunkSize
 * @property S3DataRepositoryConfiguration $S3
 * @property list<Tag> $Tags
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FileCacheId
 * @property string $FileCachePath
 * @property list<string> $DataRepositorySubdirectories
 * @property NFSDataRepositoryConfiguration $NFS
 */
class DataRepositoryAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     ResourceARN?: string,
     *     FileSystemId?: string,
     *     Lifecycle?: 'CREATING'|'AVAILABLE'|'MISCONFIGURED'|'UPDATING'|'DELETING'|'FAILED',
     *     FailureDetails?: DataRepositoryFailureDetails,
     *     FileSystemPath?: string,
     *     DataRepositoryPath?: string,
     *     BatchImportMetaDataOnCreate?: bool,
     *     ImportedFileChunkSize?: int,
     *     S3?: S3DataRepositoryConfiguration,
     *     Tags?: list<Tag>,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     FileCacheId?: string,
     *     FileCachePath?: string,
     *     DataRepositorySubdirectories?: list<string>,
     *     NFS?: NFSDataRepositoryConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
