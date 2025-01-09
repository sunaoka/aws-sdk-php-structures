<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $connected
 * @property int $timestamp
 * @property string $disconnectReason
 */
class ThingConnectivity extends Shape
{
    /**
     * @param array{
     *     connected?: bool,
     *     timestamp?: int,
     *     disconnectReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
