<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $DurationInMinutes
 * @property list<Target> $Targets
 */
class Stage extends Shape
{
    /**
     * @param array{
     *     DurationInMinutes: int,
     *     Targets: list<Target>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
