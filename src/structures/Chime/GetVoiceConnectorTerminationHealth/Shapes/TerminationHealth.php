<?php

namespace Sunaoka\Aws\Structures\Chime\GetVoiceConnectorTerminationHealth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string $Source
 */
class TerminationHealth extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     Source?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
