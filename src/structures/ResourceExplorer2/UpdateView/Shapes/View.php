<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\UpdateView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SearchFilter $Filters
 * @property list<IncludedProperty> $IncludedProperties
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property string $Owner
 * @property string $Scope
 * @property string $ViewArn
 */
class View extends Shape
{
    /**
     * @param array{
     *     Filters?: SearchFilter,
     *     IncludedProperties?: list<IncludedProperty>,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     Owner?: string,
     *     Scope?: string,
     *     ViewArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
