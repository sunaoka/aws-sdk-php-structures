<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListFileShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NFS'|'SMB'|null $FileShareType
 * @property string|null $FileShareARN
 * @property string|null $FileShareId
 * @property string|null $FileShareStatus
 * @property string|null $GatewayARN
 */
class FileShareInfo extends Shape
{
    /**
     * @param array{
     *     FileShareType?: 'NFS'|'SMB'|null,
     *     FileShareARN?: string|null,
     *     FileShareId?: string|null,
     *     FileShareStatus?: string|null,
     *     GatewayARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
