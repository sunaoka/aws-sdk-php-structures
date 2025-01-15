<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExportingStackId
 * @property string|null $Name
 * @property string|null $Value
 */
class Export extends Shape
{
    /**
     * @param array{
     *     ExportingStackId?: string|null,
     *     Name?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
