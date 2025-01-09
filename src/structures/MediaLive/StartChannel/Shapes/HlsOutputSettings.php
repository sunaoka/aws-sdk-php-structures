<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEV1'|'HVC1' $H265PackagingType
 * @property HlsSettings $HlsSettings
 * @property string $NameModifier
 * @property string $SegmentModifier
 */
class HlsOutputSettings extends Shape
{
    /**
     * @param array{
     *     H265PackagingType?: 'HEV1'|'HVC1',
     *     HlsSettings: HlsSettings,
     *     NameModifier?: string,
     *     SegmentModifier?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
