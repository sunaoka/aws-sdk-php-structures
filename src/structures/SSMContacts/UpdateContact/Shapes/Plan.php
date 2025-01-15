<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Stage>|null $Stages
 * @property list<string>|null $RotationIds
 */
class Plan extends Shape
{
    /**
     * @param array{
     *     Stages?: list<Stage>|null,
     *     RotationIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
