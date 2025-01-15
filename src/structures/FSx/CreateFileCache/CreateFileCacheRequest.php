<?php

namespace Sunaoka\Aws\Structures\FSx\CreateFileCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientRequestToken
 * @property 'LUSTRE' $FileCacheType
 * @property string $FileCacheTypeVersion
 * @property int<0, 2147483647> $StorageCapacity
 * @property list<string> $SubnetIds
 * @property list<string>|null $SecurityGroupIds
 * @property list<Shapes\Tag>|null $Tags
 * @property bool|null $CopyTagsToDataRepositoryAssociations
 * @property string|null $KmsKeyId
 * @property Shapes\CreateFileCacheLustreConfiguration|null $LustreConfiguration
 * @property list<Shapes\FileCacheDataRepositoryAssociation>|null $DataRepositoryAssociations
 */
class CreateFileCacheRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken?: string|null,
     *     FileCacheType: 'LUSTRE',
     *     FileCacheTypeVersion: string,
     *     StorageCapacity: int<0, 2147483647>,
     *     SubnetIds: list<string>,
     *     SecurityGroupIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     CopyTagsToDataRepositoryAssociations?: bool|null,
     *     KmsKeyId?: string|null,
     *     LustreConfiguration?: Shapes\CreateFileCacheLustreConfiguration|null,
     *     DataRepositoryAssociations?: list<Shapes\FileCacheDataRepositoryAssociation>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
