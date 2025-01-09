<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputKey
 * @property string $OutputValue
 * @property string $Description
 * @property string $ExportName
 */
class Output extends Shape
{
    /**
     * @param array{
     *     OutputKey?: string,
     *     OutputValue?: string,
     *     Description?: string,
     *     ExportName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
