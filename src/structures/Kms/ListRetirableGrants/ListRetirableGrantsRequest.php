<?php

namespace Sunaoka\Aws\Structures\Kms\ListRetirableGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $Limit
 * @property string|null $Marker
 * @property string $RetiringPrincipal
 */
class ListRetirableGrantsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 1000>|null,
     *     Marker?: string|null,
     *     RetiringPrincipal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
