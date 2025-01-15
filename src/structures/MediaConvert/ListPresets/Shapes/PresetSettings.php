<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioDescription>|null $AudioDescriptions
 * @property list<CaptionDescriptionPreset>|null $CaptionDescriptions
 * @property ContainerSettings|null $ContainerSettings
 * @property VideoDescription|null $VideoDescription
 */
class PresetSettings extends Shape
{
    /**
     * @param array{
     *     AudioDescriptions?: list<AudioDescription>|null,
     *     CaptionDescriptions?: list<CaptionDescriptionPreset>|null,
     *     ContainerSettings?: ContainerSettings|null,
     *     VideoDescription?: VideoDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
