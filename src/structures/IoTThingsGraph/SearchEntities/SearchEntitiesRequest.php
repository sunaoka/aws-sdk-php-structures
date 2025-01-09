<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM'> $entityTypes
 * @property list<Shapes\EntityFilter> $filters
 * @property string $nextToken
 * @property int $maxResults
 * @property int $namespaceVersion
 */
class SearchEntitiesRequest extends Request
{
    /**
     * @param array{
     *     entityTypes: list<'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM'>,
     *     filters?: list<Shapes\EntityFilter>,
     *     nextToken?: string,
     *     maxResults?: int,
     *     namespaceVersion?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
