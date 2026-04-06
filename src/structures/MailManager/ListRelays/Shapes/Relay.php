<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRelays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RelayId
 * @property string|null $RelayName
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimestamp
 */
class Relay extends Shape
{
    /**
     * @param array{
     *     RelayId?: string|null,
     *     RelayName?: string|null,
     *     LastModifiedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
