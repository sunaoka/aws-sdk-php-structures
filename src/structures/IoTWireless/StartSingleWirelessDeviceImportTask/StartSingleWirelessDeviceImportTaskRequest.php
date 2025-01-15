<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartSingleWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationName
 * @property string|null $ClientRequestToken
 * @property string|null $DeviceName
 * @property list<Shapes\Tag>|null $Tags
 * @property Shapes\SidewalkSingleStartImportInfo $Sidewalk
 */
class StartSingleWirelessDeviceImportTaskRequest extends Request
{
    /**
     * @param array{
     *     DestinationName: string,
     *     ClientRequestToken?: string|null,
     *     DeviceName?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Sidewalk: Shapes\SidewalkSingleStartImportInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
