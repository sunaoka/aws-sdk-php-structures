<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorTerminationHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property string|null $Source
 */
class TerminationHealth extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     Source?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
