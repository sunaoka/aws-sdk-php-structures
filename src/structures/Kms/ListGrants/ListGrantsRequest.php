<?php

namespace Sunaoka\Aws\Structures\Kms\ListGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $Limit
 * @property string|null $Marker
 * @property string $KeyId
 * @property string|null $GrantId
 * @property string|null $GranteePrincipal
 */
class ListGrantsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 1000>|null,
     *     Marker?: string|null,
     *     KeyId: string,
     *     GrantId?: string|null,
     *     GranteePrincipal?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
