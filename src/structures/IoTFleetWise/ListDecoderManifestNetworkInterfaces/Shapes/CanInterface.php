<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ListDecoderManifestNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $protocolName
 * @property string $protocolVersion
 */
class CanInterface extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     protocolName?: string,
     *     protocolVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
