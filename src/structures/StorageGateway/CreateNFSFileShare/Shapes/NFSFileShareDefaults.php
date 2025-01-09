<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateNFSFileShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FileMode
 * @property string $DirectoryMode
 * @property int<0, 4294967294> $GroupId
 * @property int<0, 4294967294> $OwnerId
 */
class NFSFileShareDefaults extends Shape
{
    /**
     * @param array{
     *     FileMode?: string,
     *     DirectoryMode?: string,
     *     GroupId?: int<0, 4294967294>,
     *     OwnerId?: int<0, 4294967294>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
