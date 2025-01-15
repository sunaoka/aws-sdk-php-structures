<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\DescribeServiceActionExecutionParameters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Type
 * @property list<string>|null $DefaultValues
 */
class ExecutionParameter extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: string|null,
     *     DefaultValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
