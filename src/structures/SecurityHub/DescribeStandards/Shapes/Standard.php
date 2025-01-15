<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeStandards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StandardsArn
 * @property string|null $Name
 * @property string|null $Description
 * @property bool|null $EnabledByDefault
 * @property StandardsManagedBy|null $StandardsManagedBy
 */
class Standard extends Shape
{
    /**
     * @param array{
     *     StandardsArn?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     EnabledByDefault?: bool|null,
     *     StandardsManagedBy?: StandardsManagedBy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
