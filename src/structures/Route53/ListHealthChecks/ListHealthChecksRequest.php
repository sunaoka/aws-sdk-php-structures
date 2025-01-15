<?php

namespace Sunaoka\Aws\Structures\Route53\ListHealthChecks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 */
class ListHealthChecksRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
