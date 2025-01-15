<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileSystemAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FileSystemAssociationId
 * @property string|null $FileSystemAssociationARN
 * @property string|null $FileSystemAssociationStatus
 * @property string|null $GatewayARN
 */
class FileSystemAssociationSummary extends Shape
{
    /**
     * @param array{
     *     FileSystemAssociationId?: string|null,
     *     FileSystemAssociationARN?: string|null,
     *     FileSystemAssociationStatus?: string|null,
     *     GatewayARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
