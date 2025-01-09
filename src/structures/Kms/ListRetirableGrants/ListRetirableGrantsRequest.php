<?php

namespace Sunaoka\Aws\Structures\Kms\ListRetirableGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $Limit
 * @property string $Marker
 * @property string $RetiringPrincipal
 */
class ListRetirableGrantsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int<1, 1000>,
     *     Marker?: string,
     *     RetiringPrincipal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
