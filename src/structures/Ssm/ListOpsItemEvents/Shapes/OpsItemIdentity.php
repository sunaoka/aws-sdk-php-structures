<?php

namespace Sunaoka\Aws\Structures\Ssm\ListOpsItemEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class OpsItemIdentity extends Shape
{
    /**
     * @param array{Arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
