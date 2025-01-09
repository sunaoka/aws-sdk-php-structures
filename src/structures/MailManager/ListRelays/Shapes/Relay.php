<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRelays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastModifiedTimestamp
 * @property string $RelayId
 * @property string $RelayName
 */
class Relay extends Shape
{
    /**
     * @param array{
     *     LastModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     RelayId?: string,
     *     RelayName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
