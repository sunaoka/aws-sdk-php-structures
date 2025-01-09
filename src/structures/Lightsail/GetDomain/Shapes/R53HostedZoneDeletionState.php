<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'PENDING'|'FAILED'|'STARTED' $code
 * @property string $message
 */
class R53HostedZoneDeletionState extends Shape
{
    /**
     * @param array{
     *     code?: 'SUCCEEDED'|'PENDING'|'FAILED'|'STARTED',
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
