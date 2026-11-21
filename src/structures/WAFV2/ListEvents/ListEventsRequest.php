<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property Shapes\TimeWindow|null $TimeWindow
 * @property list<Shapes\EventFilter>|null $Filters
 * @property list<Shapes\ApiPatternFilter>|null $ApiPatternFilters
 * @property int<1, 20>|null $Limit
 * @property string|null $NextMarker
 * @property 'ASC'|'DESC'|null $SortOrder
 * @property 'START_TIME'|'END_TIME'|'CONFIDENCE'|null $SortBy
 * @property list<'TIMELINE'>|null $Include
 */
class ListEventsRequest extends Request
{
    /**
     * @param array{
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     TimeWindow?: Shapes\TimeWindow|null,
     *     Filters?: list<Shapes\EventFilter>|null,
     *     ApiPatternFilters?: list<Shapes\ApiPatternFilter>|null,
     *     Limit?: int<1, 20>|null,
     *     NextMarker?: string|null,
     *     SortOrder?: 'ASC'|'DESC'|null,
     *     SortBy?: 'START_TIME'|'END_TIME'|'CONFIDENCE'|null,
     *     Include?: list<'TIMELINE'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
