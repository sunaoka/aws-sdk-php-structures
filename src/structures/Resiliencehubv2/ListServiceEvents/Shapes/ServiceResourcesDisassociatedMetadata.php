<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $resourceCount
 * @property list<string>|null $resourceTypes
 */
class ServiceResourcesDisassociatedMetadata extends Shape
{
    /**
     * @param array{
     *     resourceCount?: int|null,
     *     resourceTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
