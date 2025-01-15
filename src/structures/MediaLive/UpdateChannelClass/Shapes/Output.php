<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $AudioDescriptionNames
 * @property list<string>|null $CaptionDescriptionNames
 * @property string|null $OutputName
 * @property OutputSettings $OutputSettings
 * @property string|null $VideoDescriptionName
 */
class Output extends Shape
{
    /**
     * @param array{
     *     AudioDescriptionNames?: list<string>|null,
     *     CaptionDescriptionNames?: list<string>|null,
     *     OutputName?: string|null,
     *     OutputSettings: OutputSettings,
     *     VideoDescriptionName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
