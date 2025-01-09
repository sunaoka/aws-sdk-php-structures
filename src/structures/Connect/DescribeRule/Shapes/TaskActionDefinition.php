<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $ContactFlowId
 * @property array<string, Reference> $References
 */
class TaskActionDefinition extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     ContactFlowId: string,
     *     References?: array<string, Reference>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
