<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $ImputedPath
 * @property string $FilledPath
 */
class FillMissingValues extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     ImputedPath: string,
     *     FilledPath?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
