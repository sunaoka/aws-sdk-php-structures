<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceFunctionId
 * @property string|null $serviceFunctionName
 * @property list<string>|null $resourcesRemoved
 */
class ServiceFunctionResourcesRemovedMetadata extends Shape
{
    /**
     * @param array{
     *     serviceFunctionId?: string|null,
     *     serviceFunctionName?: string|null,
     *     resourcesRemoved?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
