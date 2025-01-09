<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileSystemAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileSystemAssociationId
 * @property string $FileSystemAssociationARN
 * @property string $FileSystemAssociationStatus
 * @property string $GatewayARN
 */
class FileSystemAssociationSummary extends Shape
{
    /**
     * @param array{
     *     FileSystemAssociationId?: string,
     *     FileSystemAssociationARN?: string,
     *     FileSystemAssociationStatus?: string,
     *     GatewayARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
