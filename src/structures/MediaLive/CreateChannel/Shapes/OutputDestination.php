<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property list<MediaPackageOutputDestinationSettings>|null $MediaPackageSettings
 * @property MultiplexProgramChannelDestinationSettings|null $MultiplexSettings
 * @property list<OutputDestinationSettings>|null $Settings
 * @property list<SrtOutputDestinationSettings>|null $SrtSettings
 * @property list<string>|null $LogicalInterfaceNames
 */
class OutputDestination extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     MediaPackageSettings?: list<MediaPackageOutputDestinationSettings>|null,
     *     MultiplexSettings?: MultiplexProgramChannelDestinationSettings|null,
     *     Settings?: list<OutputDestinationSettings>|null,
     *     SrtSettings?: list<SrtOutputDestinationSettings>|null,
     *     LogicalInterfaceNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
