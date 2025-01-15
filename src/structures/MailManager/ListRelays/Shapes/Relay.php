<?php

namespace Sunaoka\Aws\Structures\MailManager\ListRelays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimestamp
 * @property string|null $RelayId
 * @property string|null $RelayName
 */
class Relay extends Shape
{
    /**
     * @param array{
     *     LastModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     RelayId?: string|null,
     *     RelayName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
