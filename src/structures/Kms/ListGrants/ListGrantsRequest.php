<?php

namespace Sunaoka\Aws\Structures\Kms\ListGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $Limit
 * @property string $Marker
 * @property string $KeyId
 * @property string $GrantId
 * @property string $GranteePrincipal
 */
class ListGrantsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 1000>,
     *     Marker?: string,
     *     KeyId: string,
     *     GrantId?: string,
     *     GranteePrincipal?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
