<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccessToken
 * @property int $Limit
 * @property string $PaginationToken
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     AccessToken: string,
     *     Limit?: int,
     *     PaginationToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
