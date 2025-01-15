<?php

namespace Sunaoka\Aws\Structures\Neptune\RebootDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property int|null $Port
 * @property string|null $HostedZoneId
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     Port?: int|null,
     *     HostedZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
