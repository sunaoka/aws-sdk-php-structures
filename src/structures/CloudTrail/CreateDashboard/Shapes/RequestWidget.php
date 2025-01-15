<?php

namespace Sunaoka\Aws\Structures\CloudTrail\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueryStatement
 * @property list<string>|null $QueryParameters
 * @property array<string, string> $ViewProperties
 */
class RequestWidget extends Shape
{
    /**
     * @param array{
     *     QueryStatement: string,
     *     QueryParameters?: list<string>|null,
     *     ViewProperties: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
