<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEV1'|'HVC1' $H265PackagingType
 * @property string $NameModifier
 */
class MsSmoothOutputSettings extends Shape
{
    /**
     * @param array{
     *     H265PackagingType?: 'HEV1'|'HVC1',
     *     NameModifier?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
