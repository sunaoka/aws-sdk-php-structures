<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AudioDescriptionNames
 * @property list<string> $CaptionDescriptionNames
 * @property string $OutputName
 * @property OutputSettings $OutputSettings
 * @property string $VideoDescriptionName
 */
class Output extends Shape
{
    /**
     * @param array{
     *     AudioDescriptionNames?: list<string>,
     *     CaptionDescriptionNames?: list<string>,
     *     OutputName?: string,
     *     OutputSettings: OutputSettings,
     *     VideoDescriptionName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
