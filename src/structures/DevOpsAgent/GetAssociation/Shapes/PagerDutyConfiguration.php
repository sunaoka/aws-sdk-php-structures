<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $services
 * @property string $customerEmail
 */
class PagerDutyConfiguration extends Shape
{
    /**
     * @param array{
     *     services: list<string>,
     *     customerEmail: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
