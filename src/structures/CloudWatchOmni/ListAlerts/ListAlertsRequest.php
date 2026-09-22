<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListAlerts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property Shapes\AlertFilterCriteria|null $filterCriteria
 * @property 'NAME'|'STATE'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListAlertsRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     filterCriteria?: Shapes\AlertFilterCriteria|null,
     *     sortBy?: 'NAME'|'STATE'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
