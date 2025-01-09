<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\StartQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Field
 * @property 'EQUALS'|'NOT_EQUALS' $Operator
 * @property list<string> $Values
 */
class FilterParameter extends Shape
{
    /**
     * @param array{
     *     Field?: string,
     *     Operator?: 'EQUALS'|'NOT_EQUALS',
     *     Values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
