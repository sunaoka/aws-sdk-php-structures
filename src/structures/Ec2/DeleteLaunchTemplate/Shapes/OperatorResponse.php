<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Managed
 * @property string|null $Principal
 * @property bool|null $HiddenByDefault
 */
class OperatorResponse extends Shape
{
    /**
     * @param array{
     *     Managed?: bool|null,
     *     Principal?: string|null,
     *     HiddenByDefault?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
