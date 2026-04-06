<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationEfs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocationArn
 * @property string|null $Subdirectory
 * @property string|null $AccessPointArn
 * @property string|null $FileSystemAccessRoleArn
 * @property 'NONE'|'TLS1_2'|null $InTransitEncryption
 */
class UpdateLocationEfsRequest extends Request
{
    /**
     * @param array{
     *     LocationArn: string,
     *     Subdirectory?: string|null,
     *     AccessPointArn?: string|null,
     *     FileSystemAccessRoleArn?: string|null,
     *     InTransitEncryption?: 'NONE'|'TLS1_2'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
