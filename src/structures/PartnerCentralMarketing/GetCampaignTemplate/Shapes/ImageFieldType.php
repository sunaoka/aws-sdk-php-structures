<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\GetCampaignTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $MaxSizeBytes
 * @property list<'PNG'|'JPEG'>|null $AllowedFormats
 * @property LayoutPreview|null $DefaultValue
 * @property int<1, max>|null $RecommendedWidthPixels
 * @property int<1, max>|null $RecommendedHeightPixels
 */
class ImageFieldType extends Shape
{
    /**
     * @param array{
     *     MaxSizeBytes?: int<1, max>|null,
     *     AllowedFormats?: list<'PNG'|'JPEG'>|null,
     *     DefaultValue?: LayoutPreview|null,
     *     RecommendedWidthPixels?: int<1, max>|null,
     *     RecommendedHeightPixels?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
