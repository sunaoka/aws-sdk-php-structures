<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $protocolName
 * @property string|null $protocolVersion
 */
class CanInterface extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     protocolName?: string|null,
     *     protocolVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
