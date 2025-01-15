<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ImportDecoderManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $networkInterface
 * @property list<string|resource|\Psr\Http\Message\StreamInterface> $canDbcFiles
 * @property array<string, string>|null $signalsMap
 */
class CanDbcDefinition extends Shape
{
    /**
     * @param array{
     *     networkInterface: string,
     *     canDbcFiles: list<string|resource|\Psr\Http\Message\StreamInterface>,
     *     signalsMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
