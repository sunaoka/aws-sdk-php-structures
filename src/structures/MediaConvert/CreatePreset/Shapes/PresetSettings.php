<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioDescription> $AudioDescriptions
 * @property list<CaptionDescriptionPreset> $CaptionDescriptions
 * @property ContainerSettings $ContainerSettings
 * @property VideoDescription $VideoDescription
 */
class PresetSettings extends Shape
{
    /**
     * @param array{
     *     AudioDescriptions?: list<AudioDescription>,
     *     CaptionDescriptions?: list<CaptionDescriptionPreset>,
     *     ContainerSettings?: ContainerSettings,
     *     VideoDescription?: VideoDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
