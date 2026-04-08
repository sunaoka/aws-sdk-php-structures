<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, array<string, string>>|null $volumeToConversionMap
 * @property string|null $rootVolumeName
 * @property bool|null $forceUefi
 * @property string|null $dataTimestamp
 * @property array<string, int<0, max>>|null $volumeToVolumeSize
 * @property array<string, list<ProductCode>>|null $volumeToProductCodes
 */
class ConversionProperties extends Shape
{
    /**
     * @param array{
     *     volumeToConversionMap?: array<string, array<string, string>>|null,
     *     rootVolumeName?: string|null,
     *     forceUefi?: bool|null,
     *     dataTimestamp?: string|null,
     *     volumeToVolumeSize?: array<string, int<0, max>>|null,
     *     volumeToProductCodes?: array<string, list<ProductCode>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
