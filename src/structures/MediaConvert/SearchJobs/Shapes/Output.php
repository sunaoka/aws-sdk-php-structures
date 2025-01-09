<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioDescription> $AudioDescriptions
 * @property list<CaptionDescription> $CaptionDescriptions
 * @property ContainerSettings $ContainerSettings
 * @property string $Extension
 * @property string $NameModifier
 * @property OutputSettings $OutputSettings
 * @property string $Preset
 * @property VideoDescription $VideoDescription
 */
class Output extends Shape
{
    /**
     * @param array{
     *     AudioDescriptions?: list<AudioDescription>,
     *     CaptionDescriptions?: list<CaptionDescription>,
     *     ContainerSettings?: ContainerSettings,
     *     Extension?: string,
     *     NameModifier?: string,
     *     OutputSettings?: OutputSettings,
     *     Preset?: string,
     *     VideoDescription?: VideoDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
