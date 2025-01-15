<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EntityFilter $filter
 * @property string|null $locale
 * @property string|null $nextToken
 * @property int<10, 100>|null $maxResults
 */
class DescribeAffectedEntitiesRequest extends Request
{
    /**
     * @param array{
     *     filter: Shapes\EntityFilter,
     *     locale?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<10, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
