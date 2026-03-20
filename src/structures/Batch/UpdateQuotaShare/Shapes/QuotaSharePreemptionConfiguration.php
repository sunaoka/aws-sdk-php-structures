<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateQuotaShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $inSharePreemption
 */
class QuotaSharePreemptionConfiguration extends Shape
{
    /**
     * @param array{inSharePreemption: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
