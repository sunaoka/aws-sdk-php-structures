<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $connected
 * @property int|null $timestamp
 * @property string|null $disconnectReason
 */
class ThingConnectivity extends Shape
{
    /**
     * @param array{
     *     connected?: bool|null,
     *     timestamp?: int|null,
     *     disconnectReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
