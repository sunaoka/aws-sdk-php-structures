<?php

namespace Sunaoka\Aws\Structures\IoTWireless\StartWirelessDeviceImportTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DestinationName
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 * @property Shapes\SidewalkStartImportInfo $Sidewalk
 */
class StartWirelessDeviceImportTaskRequest extends Request
{
    /**
     * @param array{
     *     DestinationName: string,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>,
     *     Sidewalk: Shapes\SidewalkStartImportInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
