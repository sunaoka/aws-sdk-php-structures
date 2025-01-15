<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AudioDescription>|null $AudioDescriptions
 * @property list<CaptionDescription>|null $CaptionDescriptions
 * @property ContainerSettings|null $ContainerSettings
 * @property string|null $Extension
 * @property string|null $NameModifier
 * @property OutputSettings|null $OutputSettings
 * @property string|null $Preset
 * @property VideoDescription|null $VideoDescription
 */
class Output extends Shape
{
    /**
     * @param array{
     *     AudioDescriptions?: list<AudioDescription>|null,
     *     CaptionDescriptions?: list<CaptionDescription>|null,
     *     ContainerSettings?: ContainerSettings|null,
     *     Extension?: string|null,
     *     NameModifier?: string|null,
     *     OutputSettings?: OutputSettings|null,
     *     Preset?: string|null,
     *     VideoDescription?: VideoDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
