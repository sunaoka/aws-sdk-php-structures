<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeServiceActionExecutionParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Type
 * @property list<string> $DefaultValues
 */
class ExecutionParameter extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: string,
     *     DefaultValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
