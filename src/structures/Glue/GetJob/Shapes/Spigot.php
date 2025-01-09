<?php

namespace Sunaoka\Aws\Structures\Glue\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Inputs
 * @property string $Path
 * @property int $Topk
 * @property double $Prob
 */
class Spigot extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Inputs: list<string>,
     *     Path: string,
     *     Topk?: int,
     *     Prob?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
