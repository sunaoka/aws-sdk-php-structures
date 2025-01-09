<?php

namespace Sunaoka\Aws\Structures\Kms\ListGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Limit
 * @property string $Marker
 * @property string $KeyId
 * @property string $GrantId
 * @property string $GranteePrincipal
 */
class ListGrantsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int,
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
