<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ImportApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $value
 * @property string|null $policyName
 * @property 'SELF'|'CROSS_ACCOUNT'|null $source
 */
class SloSource extends Shape
{
    /**
     * @param array{
     *     value?: double|null,
     *     policyName?: string|null,
     *     source?: 'SELF'|'CROSS_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
