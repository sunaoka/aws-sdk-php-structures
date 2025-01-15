<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<string>|null $Names
 * @property string|null $AccountId
 * @property string|null $Type
 */
class ServiceId extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Names?: list<string>|null,
     *     AccountId?: string|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
