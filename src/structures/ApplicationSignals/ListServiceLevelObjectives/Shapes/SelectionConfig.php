<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceLevelObjectives\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXPLICIT'|'PREFIX'|'REGEX' $Type
 * @property string|null $Pattern
 */
class SelectionConfig extends Shape
{
    /**
     * @param array{
     *     Type: 'EXPLICIT'|'PREFIX'|'REGEX',
     *     Pattern?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
