<?php

namespace Sunaoka\Aws\Structures\Kms\ListRetirableGrants;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Limit
 * @property string $Marker
 * @property string $RetiringPrincipal
 */
class ListRetirableGrantsRequest extends Request
{
    /**
     * @param array{
     *     Limit?: int,
     *     Marker?: string,
     *     RetiringPrincipal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
