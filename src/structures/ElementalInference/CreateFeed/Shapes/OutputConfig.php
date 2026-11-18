<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CroppingConfig|null $cropping
 * @property ClippingConfig|null $clipping
 * @property SubtitlingConfig|null $subtitling
 * @property ContextualMetadataConfig|null $contextualMetadata
 * @property FunctionConfig|null $function
 */
class OutputConfig extends Shape
{
    /**
     * @param array{
     *     cropping?: CroppingConfig|null,
     *     clipping?: ClippingConfig|null,
     *     subtitling?: SubtitlingConfig|null,
     *     contextualMetadata?: ContextualMetadataConfig|null,
     *     function?: FunctionConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
