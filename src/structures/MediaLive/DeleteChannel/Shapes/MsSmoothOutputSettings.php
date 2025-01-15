<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEV1'|'HVC1'|null $H265PackagingType
 * @property string|null $NameModifier
 */
class MsSmoothOutputSettings extends Shape
{
    /**
     * @param array{
     *     H265PackagingType?: 'HEV1'|'HVC1'|null,
     *     NameModifier?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
