<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConnectionFunctions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property int|null $MaxItems
 * @property 'DEVELOPMENT'|'LIVE'|null $Stage
 */
class ListConnectionFunctionsRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     MaxItems?: int|null,
     *     Stage?: 'DEVELOPMENT'|'LIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
