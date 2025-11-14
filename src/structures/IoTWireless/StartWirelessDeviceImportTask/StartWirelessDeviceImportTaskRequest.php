<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationName
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 * @property 'Enabled'|'Disabled'|null $Positioning
 * @property Shapes\SidewalkStartImportInfo $Sidewalk
 */
class StartWirelessDeviceImportTaskRequest extends Request
{
    /**
     * @param array{
     *     DestinationName: string,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Positioning?: 'Enabled'|'Disabled'|null,
     *     Sidewalk: Shapes\SidewalkStartImportInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
