<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Audit
 * @property bool $General
 */
class PendingLogs extends Shape
{
    /**
     * @param array{
     *     Audit?: bool,
     *     General?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
