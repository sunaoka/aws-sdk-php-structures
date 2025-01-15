<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchEntities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM'> $entityTypes
 * @property list<Shapes\EntityFilter>|null $filters
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property int|null $namespaceVersion
 */
class SearchEntitiesRequest extends Request
{
    /**
     * @param array{
     *     entityTypes: list<'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM'>,
     *     filters?: list<Shapes\EntityFilter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     namespaceVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
