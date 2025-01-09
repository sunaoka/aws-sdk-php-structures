<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PropertyPath
 * @property bool $Required
 * @property string $Description
 */
class WarningProperty extends Shape
{
    /**
     * @param array{
     *     PropertyPath?: string,
     *     Required?: bool,
     *     Description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
