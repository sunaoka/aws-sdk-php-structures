<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetServiceView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceViewArn
 * @property string|null $ServiceViewName
 * @property SearchFilter|null $Filters
 * @property list<IncludedProperty>|null $IncludedProperties
 * @property string|null $StreamingAccessForService
 * @property string|null $ScopeType
 */
class ServiceView extends Shape
{
    /**
     * @param array{
     *     ServiceViewArn: string,
     *     ServiceViewName?: string|null,
     *     Filters?: SearchFilter|null,
     *     IncludedProperties?: list<IncludedProperty>|null,
     *     StreamingAccessForService?: string|null,
     *     ScopeType?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
