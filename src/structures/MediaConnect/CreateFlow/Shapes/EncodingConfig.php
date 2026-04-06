<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISTRIBUTION_H264_DEFAULT'|'CONTRIBUTION_H264_DEFAULT'|null $EncodingProfile
 * @property int|null $VideoMaxBitrate
 */
class EncodingConfig extends Shape
{
    /**
     * @param array{
     *     EncodingProfile?: 'DISTRIBUTION_H264_DEFAULT'|'CONTRIBUTION_H264_DEFAULT'|null,
     *     VideoMaxBitrate?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
