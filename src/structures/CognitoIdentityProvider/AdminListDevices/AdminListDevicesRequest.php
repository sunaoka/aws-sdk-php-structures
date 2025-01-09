<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property int $Limit
 * @property string $PaginationToken
 */
class AdminListDevicesRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     Limit?: int,
     *     PaginationToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
