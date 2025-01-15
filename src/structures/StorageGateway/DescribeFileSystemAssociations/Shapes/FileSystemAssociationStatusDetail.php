<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeFileSystemAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 */
class FileSystemAssociationStatusDetail extends Shape
{
    /**
     * @param array{ErrorCode?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
