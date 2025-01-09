<?php

namespace Sunaoka\Aws\Structures\Ssm\GetOpsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TypeName
 */
class OpsResultAttribute extends Shape
{
    /**
     * @param array{TypeName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
