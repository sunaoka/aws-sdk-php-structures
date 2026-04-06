<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\BatchGetView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SearchFilter|null $Filters
 * @property list<IncludedProperty>|null $IncludedProperties
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $Owner
 * @property string|null $Scope
 * @property string|null $ViewArn
 */
class View extends Shape
{
    /**
     * @param array{
     *     Filters?: SearchFilter|null,
     *     IncludedProperties?: list<IncludedProperty>|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Owner?: string|null,
     *     Scope?: string|null,
     *     ViewArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
