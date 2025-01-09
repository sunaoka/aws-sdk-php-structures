<?php

namespace Sunaoka\Aws\Structures\FSx\CreateDataRepositoryAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FileSystemId
 * @property string $FileSystemPath
 * @property string $DataRepositoryPath
 * @property bool $BatchImportMetaDataOnCreate
 * @property int<1, 512000> $ImportedFileChunkSize
 * @property Shapes\S3DataRepositoryConfiguration $S3
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 */
class CreateDataRepositoryAssociationRequest extends Request
{
    /**
     * @param array{
     *     FileSystemId: string,
     *     FileSystemPath?: string,
     *     DataRepositoryPath: string,
     *     BatchImportMetaDataOnCreate?: bool,
     *     ImportedFileChunkSize?: int<1, 512000>,
     *     S3?: Shapes\S3DataRepositoryConfiguration,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
