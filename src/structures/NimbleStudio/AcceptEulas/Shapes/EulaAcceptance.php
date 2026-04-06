<?php

namespace Sunaoka\Aws\Structures\NimbleStudio\AcceptEulas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $acceptedAt
 * @property string|null $acceptedBy
 * @property string|null $accepteeId
 * @property string|null $eulaAcceptanceId
 * @property string|null $eulaId
 */
class EulaAcceptance extends Shape
{
    /**
     * @param array{
     *     acceptedAt?: \Aws\Api\DateTimeResult|null,
     *     acceptedBy?: string|null,
     *     accepteeId?: string|null,
     *     eulaAcceptanceId?: string|null,
     *     eulaId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
