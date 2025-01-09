<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataTimestamp
 * @property bool $forceUefi
 * @property string $rootVolumeName
 * @property array<string, array<string, string>> $volumeToConversionMap
 * @property array<string, list<ProductCode>> $volumeToProductCodes
 * @property array<string, int> $volumeToVolumeSize
 */
class ConversionProperties extends Shape
{
    /**
     * @param array{
     *     dataTimestamp?: string,
     *     forceUefi?: bool,
     *     rootVolumeName?: string,
     *     volumeToConversionMap?: array<string, array<string, string>>,
     *     volumeToProductCodes?: array<string, list<ProductCode>>,
     *     volumeToVolumeSize?: array<string, int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
