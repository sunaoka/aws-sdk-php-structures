<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Audit
 * @property bool|null $General
 */
class PendingLogs extends Shape
{
    /**
     * @param array{
     *     Audit?: bool|null,
     *     General?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
