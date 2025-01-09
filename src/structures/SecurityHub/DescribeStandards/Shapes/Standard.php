<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeStandards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StandardsArn
 * @property string $Name
 * @property string $Description
 * @property bool $EnabledByDefault
 * @property StandardsManagedBy $StandardsManagedBy
 */
class Standard extends Shape
{
    /**
     * @param array{
     *     StandardsArn?: string,
     *     Name?: string,
     *     Description?: string,
     *     EnabledByDefault?: bool,
     *     StandardsManagedBy?: StandardsManagedBy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
