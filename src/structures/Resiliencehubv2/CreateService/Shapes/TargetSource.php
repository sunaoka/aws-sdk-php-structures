<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $value
 * @property string|null $policyName
 * @property 'SELF'|'CROSS_ACCOUNT'|null $source
 */
class TargetSource extends Shape
{
    /**
     * @param array{
     *     value?: int|null,
     *     policyName?: string|null,
     *     source?: 'SELF'|'CROSS_ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
