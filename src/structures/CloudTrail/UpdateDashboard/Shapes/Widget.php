<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QueryAlias
 * @property string|null $QueryStatement
 * @property list<string>|null $QueryParameters
 * @property array<string, string>|null $ViewProperties
 */
class Widget extends Shape
{
    /**
     * @param array{
     *     QueryAlias?: string|null,
     *     QueryStatement?: string|null,
     *     QueryParameters?: list<string>|null,
     *     ViewProperties?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
