<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Comment
 * @property bool|null $PrivateZone
 */
class HostedZoneConfig extends Shape
{
    /**
     * @param array{
     *     Comment?: string|null,
     *     PrivateZone?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
