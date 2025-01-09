<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListExports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExportingStackId
 * @property string $Name
 * @property string $Value
 */
class Export extends Shape
{
    /**
     * @param array{
     *     ExportingStackId?: string,
     *     Name?: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
