<?php

namespace Sunaoka\Aws\Structures\Billing\UpdateBillingPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property 'ENABLED'|'DISABLED' $value
 */
class BillingPreferenceForKey extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
