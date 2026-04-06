<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $dataTimestamp
 * @property bool|null $forceUefi
 * @property string|null $rootVolumeName
 * @property array<string, array<string, string>>|null $volumeToConversionMap
 * @property array<string, int<0, max>>|null $volumeToVolumeSize
 */
class ConversionProperties extends Shape
{
    /**
     * @param array{
     *     dataTimestamp?: string|null,
     *     forceUefi?: bool|null,
     *     rootVolumeName?: string|null,
     *     volumeToConversionMap?: array<string, array<string, string>>|null,
     *     volumeToVolumeSize?: array<string, int<0, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
