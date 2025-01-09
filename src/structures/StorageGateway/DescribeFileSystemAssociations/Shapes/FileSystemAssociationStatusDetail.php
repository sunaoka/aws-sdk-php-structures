<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeFileSystemAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 */
class FileSystemAssociationStatusDetail extends Shape
{
    /**
     * @param array{ErrorCode?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
