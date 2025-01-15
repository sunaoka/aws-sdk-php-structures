<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property int<0, 60>|null $Limit
 * @property string|null $PaginationToken
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     Limit?: int<0, 60>|null,
     *     PaginationToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
