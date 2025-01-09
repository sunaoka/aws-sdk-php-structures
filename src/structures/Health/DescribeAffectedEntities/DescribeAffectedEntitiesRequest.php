<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EntityFilter $filter
 * @property string $locale
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeAffectedEntitiesRequest extends Request
{
    /**
     * @param array{
     *     filter: Shapes\EntityFilter,
     *     locale?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
