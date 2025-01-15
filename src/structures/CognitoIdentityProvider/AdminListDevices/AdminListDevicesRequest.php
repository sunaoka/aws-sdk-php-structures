<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Username
 * @property int<0, 60>|null $Limit
 * @property string|null $PaginationToken
 */
class AdminListDevicesRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Username: string,
     *     Limit?: int<0, 60>|null,
     *     PaginationToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
