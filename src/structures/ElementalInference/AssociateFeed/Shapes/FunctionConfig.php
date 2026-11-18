<?php

namespace Sunaoka\Aws\Structures\ElementalInference\AssociateFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $functionArn
 * @property Trigger $trigger
 * @property FrameSettings|null $frameSettings
 * @property SubtitlingSettings|null $subtitlingSettings
 * @property ContextualMetadataSettings|null $contextualMetadataSettings
 * @property ClippingSettings|null $clippingSettings
 */
class FunctionConfig extends Shape
{
    /**
     * @param array{
     *     functionArn: string,
     *     trigger: Trigger,
     *     frameSettings?: FrameSettings|null,
     *     subtitlingSettings?: SubtitlingSettings|null,
     *     contextualMetadataSettings?: ContextualMetadataSettings|null,
     *     clippingSettings?: ClippingSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
