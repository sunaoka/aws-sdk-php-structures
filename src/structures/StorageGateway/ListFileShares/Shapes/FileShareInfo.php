<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NFS'|'SMB' $FileShareType
 * @property string $FileShareARN
 * @property string $FileShareId
 * @property string $FileShareStatus
 * @property string $GatewayARN
 */
class FileShareInfo extends Shape
{
    /**
     * @param array{
     *     FileShareType?: 'NFS'|'SMB',
     *     FileShareARN?: string,
     *     FileShareId?: string,
     *     FileShareStatus?: string,
     *     GatewayARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
