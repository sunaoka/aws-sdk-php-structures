<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property list<MediaPackageOutputDestinationSettings> $MediaPackageSettings
 * @property MultiplexProgramChannelDestinationSettings $MultiplexSettings
 * @property list<OutputDestinationSettings> $Settings
 * @property list<SrtOutputDestinationSettings> $SrtSettings
 */
class OutputDestination extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     MediaPackageSettings?: list<MediaPackageOutputDestinationSettings>,
     *     MultiplexSettings?: MultiplexProgramChannelDestinationSettings,
     *     Settings?: list<OutputDestinationSettings>,
     *     SrtSettings?: list<SrtOutputDestinationSettings>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
