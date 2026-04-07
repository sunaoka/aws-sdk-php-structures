<?php

namespace Sunaoka\Aws\Structures\S3Files\GetSynchronizationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 365> $daysAfterLastAccess
 */
class ExpirationDataRule extends Shape
{
    /**
     * @param array{daysAfterLastAccess: int<1, 365>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
