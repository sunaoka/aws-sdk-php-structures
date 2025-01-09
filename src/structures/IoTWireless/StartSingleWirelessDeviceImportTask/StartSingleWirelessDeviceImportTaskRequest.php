<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartSingleWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationName
 * @property string $ClientRequestToken
 * @property string $DeviceName
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\SidewalkSingleStartImportInfo $Sidewalk
 */
class StartSingleWirelessDeviceImportTaskRequest extends Request
{
    /**
     * @param array{
     *     DestinationName: string,
     *     ClientRequestToken?: string,
     *     DeviceName?: string,
     *     Tags?: list<Shapes\Tag>,
     *     Sidewalk: Shapes\SidewalkSingleStartImportInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
