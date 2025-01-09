<?php

namespace Sunaoka\Aws\Structures\CloudTrail\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryStatement
 * @property list<string> $QueryParameters
 * @property array<string, string> $ViewProperties
 */
class RequestWidget extends Shape
{
    /**
     * @param array{
     *     QueryStatement: string,
     *     QueryParameters?: list<string>,
     *     ViewProperties: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
