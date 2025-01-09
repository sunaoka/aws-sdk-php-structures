<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM'> $entityTypes
 * @property list<Shapes\EntityFilter> $filters
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property int $namespaceVersion
 */
class SearchEntitiesRequest extends Request
{
    /**
     * @param array{
     *     entityTypes: list<'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM'>,
     *     filters?: list<Shapes\EntityFilter>,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     namespaceVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
