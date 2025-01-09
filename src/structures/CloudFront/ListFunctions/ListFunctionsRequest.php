<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Marker
 * @property string $MaxItems
 * @property 'DEVELOPMENT'|'LIVE' $Stage
 */
class ListFunctionsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string,
     *     MaxItems?: string,
     *     Stage?: 'DEVELOPMENT'|'LIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
