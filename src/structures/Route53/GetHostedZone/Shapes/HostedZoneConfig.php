<?php

namespace Sunaoka\Aws\Structures\Route53\GetHostedZone\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Comment
 * @property bool $PrivateZone
 */
class HostedZoneConfig extends Shape
{
    /**
     * @param array{
     *     Comment?: string,
     *     PrivateZone?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
