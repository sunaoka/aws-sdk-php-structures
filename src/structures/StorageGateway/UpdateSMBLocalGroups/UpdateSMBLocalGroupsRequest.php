<?php

namespace Sunaoka\Aws\Structures\StorageGateway\UpdateSMBLocalGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayARN
 * @property Shapes\SMBLocalGroups $SMBLocalGroups
 */
class UpdateSMBLocalGroupsRequest extends Request
{
    /**
     * @param array{
     *     GatewayARN: string,
     *     SMBLocalGroups: Shapes\SMBLocalGroups
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
