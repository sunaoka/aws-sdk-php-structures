<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ImportDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $networkInterface
 * @property list<string> $canDbcFiles
 * @property array<string, string> $signalsMap
 */
class CanDbcDefinition extends Shape
{
    /**
     * @param array{
     *     networkInterface: string,
     *     canDbcFiles: list<string>,
     *     signalsMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
