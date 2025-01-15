<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property string|null $MaxItems
 * @property 'DEVELOPMENT'|'LIVE'|null $Stage
 */
class ListFunctionsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: string|null,
     *     Stage?: 'DEVELOPMENT'|'LIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
