<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViewArn
 * @property string|null $ViewName
 * @property string|null $Owner
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property string|null $Scope
 * @property list<IncludedProperty>|null $IncludedProperties
 * @property SearchFilter|null $Filters
 */
class View extends Shape
{
    /**
     * @param array{
     *     ViewArn?: string|null,
     *     ViewName?: string|null,
     *     Owner?: string|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Scope?: string|null,
     *     IncludedProperties?: list<IncludedProperty>|null,
     *     Filters?: SearchFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
