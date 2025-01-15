<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AncillarySourceSettings|null $AncillarySourceSettings
 * @property AribSourceSettings|null $AribSourceSettings
 * @property DvbSubSourceSettings|null $DvbSubSourceSettings
 * @property EmbeddedSourceSettings|null $EmbeddedSourceSettings
 * @property Scte20SourceSettings|null $Scte20SourceSettings
 * @property Scte27SourceSettings|null $Scte27SourceSettings
 * @property TeletextSourceSettings|null $TeletextSourceSettings
 */
class CaptionSelectorSettings extends Shape
{
    /**
     * @param array{
     *     AncillarySourceSettings?: AncillarySourceSettings|null,
     *     AribSourceSettings?: AribSourceSettings|null,
     *     DvbSubSourceSettings?: DvbSubSourceSettings|null,
     *     EmbeddedSourceSettings?: EmbeddedSourceSettings|null,
     *     Scte20SourceSettings?: Scte20SourceSettings|null,
     *     Scte27SourceSettings?: Scte27SourceSettings|null,
     *     TeletextSourceSettings?: TeletextSourceSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
