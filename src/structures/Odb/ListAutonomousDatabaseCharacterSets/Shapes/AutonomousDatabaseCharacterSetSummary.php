<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseCharacterSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $characterSet
 */
class AutonomousDatabaseCharacterSetSummary extends Shape
{
    /**
     * @param array{characterSet?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
