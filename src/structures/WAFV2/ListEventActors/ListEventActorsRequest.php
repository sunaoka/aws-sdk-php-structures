<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEventActors;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property Shapes\TimeWindow $TimeWindow
 * @property 'EVENT_COUNT'|null $SortBy
 * @property int<1, 100>|null $Limit
 * @property string|null $NextMarker
 */
class ListEventActorsRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     TimeWindow: Shapes\TimeWindow,
     *     SortBy?: 'EVENT_COUNT'|null,
     *     Limit?: int<1, 100>|null,
     *     NextMarker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
