<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property 'LUSTRE' $FileCacheType
 * @property string $FileCacheTypeVersion
 * @property int $StorageCapacity
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 * @property list<Shapes\Tag> $Tags
 * @property bool $CopyTagsToDataRepositoryAssociations
 * @property string $KmsKeyId
 * @property Shapes\CreateFileCacheLustreConfiguration $LustreConfiguration
 * @property list<Shapes\FileCacheDataRepositoryAssociation> $DataRepositoryAssociations
 */
class CreateFileCacheRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string,
     *     FileCacheType: 'LUSTRE',
     *     FileCacheTypeVersion: string,
     *     StorageCapacity: int,
     *     SubnetIds: list<string>,
     *     SecurityGroupIds?: list<string>,
     *     Tags?: list<Shapes\Tag>,
     *     CopyTagsToDataRepositoryAssociations?: bool,
     *     KmsKeyId?: string,
     *     LustreConfiguration?: Shapes\CreateFileCacheLustreConfiguration,
     *     DataRepositoryAssociations?: list<Shapes\FileCacheDataRepositoryAssociation>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
