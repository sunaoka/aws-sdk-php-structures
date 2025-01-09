<?php

namespace Sunaoka\Aws\Structures\MQ\CreateBroker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Audit
 * @property bool $General
 */
class Logs extends Shape
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
