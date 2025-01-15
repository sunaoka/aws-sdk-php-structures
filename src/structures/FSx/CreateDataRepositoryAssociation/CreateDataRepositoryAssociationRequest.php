<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string|null $FileSystemPath
 * @property string $DataRepositoryPath
 * @property bool|null $BatchImportMetaDataOnCreate
 * @property int<1, 512000>|null $ImportedFileChunkSize
 * @property Shapes\S3DataRepositoryConfiguration|null $S3
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDataRepositoryAssociationRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     FileSystemPath?: string|null,
     *     DataRepositoryPath: string,
     *     BatchImportMetaDataOnCreate?: bool|null,
     *     ImportedFileChunkSize?: int<1, 512000>|null,
     *     S3?: Shapes\S3DataRepositoryConfiguration|null,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
