<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $antennaUplinkConfigArn
 * @property bool $enabled
 */
class UplinkEchoConfig extends Shape
{
    /**
     * @param array{
     *     antennaUplinkConfigArn: string,
     *     enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
