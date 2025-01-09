<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 30> $DurationInMinutes
 * @property list<Target> $Targets
 */
class Stage extends Shape
{
    /**
     * @param array{
     *     DurationInMinutes: int<0, 30>,
     *     Targets: list<Target>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
