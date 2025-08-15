<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property array<string, string>|null $Attributes
 * @property string|null $CreatedByAccount
 */
class InstanceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Attributes?: array<string, string>|null,
     *     CreatedByAccount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
