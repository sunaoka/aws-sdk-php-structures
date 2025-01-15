<?php

namespace Sunaoka\Aws\Structures\Glue\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $ImputedPath
 * @property string|null $FilledPath
 */
class FillMissingValues extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     ImputedPath: string,
     *     FilledPath?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
