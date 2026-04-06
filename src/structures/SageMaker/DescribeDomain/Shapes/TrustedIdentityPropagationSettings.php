<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $Status
 */
class TrustedIdentityPropagationSettings extends Shape
{
    /**
     * @param array{Status: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
