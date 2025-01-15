<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\StartQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Field
 * @property 'EQUALS'|'NOT_EQUALS'|null $Operator
 * @property list<string>|null $Values
 */
class FilterParameter extends Shape
{
    /**
     * @param array{
     *     Field?: string|null,
     *     Operator?: 'EQUALS'|'NOT_EQUALS'|null,
     *     Values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
