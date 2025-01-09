<?php

namespace Sunaoka\Aws\Structures\Health\DescribeAffectedEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EntityFilter $filter
 * @property string $locale
 * @property string $nextToken
 * @property int<10, 100> $maxResults
 */
class DescribeAffectedEntitiesRequest extends Request
{
    /**
     * @param array{
     *     filter: Shapes\EntityFilter,
     *     locale?: string,
     *     nextToken?: string,
     *     maxResults?: int<10, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
