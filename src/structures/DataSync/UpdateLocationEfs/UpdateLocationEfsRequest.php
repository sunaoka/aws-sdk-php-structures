<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationEfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string $Subdirectory
 * @property string $AccessPointArn
 * @property string $FileSystemAccessRoleArn
 * @property 'NONE'|'TLS1_2' $InTransitEncryption
 */
class UpdateLocationEfsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string,
     *     AccessPointArn?: string,
     *     FileSystemAccessRoleArn?: string,
     *     InTransitEncryption?: 'NONE'|'TLS1_2'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
