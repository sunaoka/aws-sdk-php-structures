<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property int|null $Number
 */
class NetworkAutonomousSystem extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Number?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
