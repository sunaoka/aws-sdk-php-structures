<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeGeneratedTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PropertyPath
 * @property bool|null $Required
 * @property string|null $Description
 */
class WarningProperty extends Shape
{
    /**
     * @param array{
     *     PropertyPath?: string|null,
     *     Required?: bool|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
