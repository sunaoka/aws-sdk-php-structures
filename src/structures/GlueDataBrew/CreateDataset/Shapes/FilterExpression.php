<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 * @property array<string, string> $ValuesMap
 */
class FilterExpression extends Shape
{
    /**
     * @param array{
     *     Expression: string,
     *     ValuesMap: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
