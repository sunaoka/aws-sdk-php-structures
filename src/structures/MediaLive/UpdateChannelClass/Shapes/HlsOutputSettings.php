<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HEV1'|'HVC1'|null $H265PackagingType
 * @property HlsSettings $HlsSettings
 * @property string|null $NameModifier
 * @property string|null $SegmentModifier
 */
class HlsOutputSettings extends Shape
{
    /**
     * @param array{
     *     H265PackagingType?: 'HEV1'|'HVC1'|null,
     *     HlsSettings: HlsSettings,
     *     NameModifier?: string|null,
     *     SegmentModifier?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
