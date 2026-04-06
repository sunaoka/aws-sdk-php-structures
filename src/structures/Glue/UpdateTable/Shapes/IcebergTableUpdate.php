<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IcebergSchema $Schema
 * @property IcebergPartitionSpec|null $PartitionSpec
 * @property IcebergSortOrder|null $SortOrder
 * @property string $Location
 * @property array<string, string>|null $Properties
 * @property 'add-schema'|'set-current-schema'|'add-spec'|'set-default-spec'|'add-sort-order'|'set-default-sort-order'|'set-location'|'set-properties'|'remove-properties'|'add-encryption-key'|'remove-encryption-key'|null $Action
 * @property IcebergEncryptedKey|null $EncryptionKey
 * @property string|null $KeyId
 */
class IcebergTableUpdate extends Shape
{
    /**
     * @param array{
     *     Schema: IcebergSchema,
     *     PartitionSpec?: IcebergPartitionSpec|null,
     *     SortOrder?: IcebergSortOrder|null,
     *     Location: string,
     *     Properties?: array<string, string>|null,
     *     Action?: 'add-schema'|'set-current-schema'|'add-spec'|'set-default-spec'|'add-sort-order'|'set-default-sort-order'|'set-location'|'set-properties'|'remove-properties'|'add-encryption-key'|'remove-encryption-key'|null,
     *     EncryptionKey?: IcebergEncryptedKey|null,
     *     KeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
