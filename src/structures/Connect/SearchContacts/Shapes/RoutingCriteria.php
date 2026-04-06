<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Step>|null $Steps
 * @property \Aws\Api\DateTimeResult|null $ActivationTimestamp
 * @property int|null $Index
 */
class RoutingCriteria extends Shape
{
    /**
     * @param array{
     *     Steps?: list<Step>|null,
     *     ActivationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Index?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
