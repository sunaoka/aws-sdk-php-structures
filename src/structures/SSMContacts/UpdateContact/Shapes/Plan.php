<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Stage> $Stages
 * @property list<string> $RotationIds
 */
class Plan extends Shape
{
    /**
     * @param array{
     *     Stages?: list<Stage>,
     *     RotationIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
