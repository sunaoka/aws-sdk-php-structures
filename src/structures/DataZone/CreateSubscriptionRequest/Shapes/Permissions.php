<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateSubscriptionRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'READ'|'WRITE'>|null $s3
 */
class Permissions extends Shape
{
    /**
     * @param array{s3?: list<'READ'|'WRITE'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
