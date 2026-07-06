<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingPreferences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PREFERENCE_KEY'|null $name
 * @property list<string>|null $value
 */
class BillingFeatureFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'PREFERENCE_KEY'|null,
     *     value?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
