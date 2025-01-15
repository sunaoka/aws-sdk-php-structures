<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Description
 * @property string $ContactFlowId
 * @property array<string, Reference>|null $References
 */
class TaskActionDefinition extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     ContactFlowId: string,
     *     References?: array<string, Reference>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
