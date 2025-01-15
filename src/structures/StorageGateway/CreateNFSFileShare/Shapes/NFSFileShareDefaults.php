<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateNFSFileShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FileMode
 * @property string|null $DirectoryMode
 * @property int<0, 4294967294>|null $GroupId
 * @property int<0, 4294967294>|null $OwnerId
 */
class NFSFileShareDefaults extends Shape
{
    /**
     * @param array{
     *     FileMode?: string|null,
     *     DirectoryMode?: string|null,
     *     GroupId?: int<0, 4294967294>|null,
     *     OwnerId?: int<0, 4294967294>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
