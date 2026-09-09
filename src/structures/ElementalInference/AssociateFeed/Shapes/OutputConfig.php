<?php

namespace Sunaoka\Aws\Structures\ElementalInference\AssociateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CroppingConfig|null $cropping
 * @property ClippingConfig|null $clipping
 * @property SubtitlingConfig|null $subtitling
 * @property ContextualMetadataConfig|null $contextualMetadata
 */
class OutputConfig extends Shape
{
    /**
     * @param array{
     *     cropping?: CroppingConfig|null,
     *     clipping?: ClippingConfig|null,
     *     subtitling?: SubtitlingConfig|null,
     *     contextualMetadata?: ContextualMetadataConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
