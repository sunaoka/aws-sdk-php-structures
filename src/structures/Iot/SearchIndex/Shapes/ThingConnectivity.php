<?php

namespace Sunaoka\Aws\Structures\Iot\SearchIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $connected
 * @property int|null $timestamp
 * @property string|null $disconnectReason
 * @property int|null $keepAliveDuration
 * @property bool|null $cleanSession
 * @property int|null $sessionExpiry
 * @property string|null $clientId
 */
class ThingConnectivity extends Shape
{
    /**
     * @param array{
     *     connected?: bool|null,
     *     timestamp?: int|null,
     *     disconnectReason?: string|null,
     *     keepAliveDuration?: int|null,
     *     cleanSession?: bool|null,
     *     sessionExpiry?: int|null,
     *     clientId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
