<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Type
 */
class QueryField extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
