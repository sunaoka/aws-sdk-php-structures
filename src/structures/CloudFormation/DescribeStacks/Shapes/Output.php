<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutputKey
 * @property string|null $OutputValue
 * @property string|null $Description
 * @property string|null $ExportName
 */
class Output extends Shape
{
    /**
     * @param array{
     *     OutputKey?: string|null,
     *     OutputValue?: string|null,
     *     Description?: string|null,
     *     ExportName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
