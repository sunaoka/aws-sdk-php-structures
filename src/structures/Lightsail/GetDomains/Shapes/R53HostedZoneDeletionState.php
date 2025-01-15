<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCEEDED'|'PENDING'|'FAILED'|'STARTED'|null $code
 * @property string|null $message
 */
class R53HostedZoneDeletionState extends Shape
{
    /**
     * @param array{
     *     code?: 'SUCCEEDED'|'PENDING'|'FAILED'|'STARTED'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
