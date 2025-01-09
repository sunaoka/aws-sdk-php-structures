<?php

namespace Sunaoka\Aws\Structures\XRay\GetInsightEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Names
 * @property string $AccountId
 * @property string $Type
 */
class ServiceId extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Names?: list<string>,
     *     AccountId?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
