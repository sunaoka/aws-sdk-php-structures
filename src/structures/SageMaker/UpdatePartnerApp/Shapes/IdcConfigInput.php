<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePartnerApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceArn
 */
class IdcConfigInput extends Shape
{
    /**
     * @param array{InstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
