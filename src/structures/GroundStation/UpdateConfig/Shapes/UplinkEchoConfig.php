<?php

namespace Sunaoka\Aws\Structures\GroundStation\UpdateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property string $antennaUplinkConfigArn
 */
class UplinkEchoConfig extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     antennaUplinkConfigArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
