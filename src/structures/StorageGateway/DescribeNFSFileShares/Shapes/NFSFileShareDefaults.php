<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeNFSFileShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileMode
 * @property string $DirectoryMode
 * @property int $GroupId
 * @property int $OwnerId
 */
class NFSFileShareDefaults extends Shape
{
    /**
     * @param array{
     *     FileMode?: string,
     *     DirectoryMode?: string,
     *     GroupId?: int,
     *     OwnerId?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
