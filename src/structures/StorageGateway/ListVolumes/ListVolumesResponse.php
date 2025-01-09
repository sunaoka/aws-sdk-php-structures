<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property string $Marker
 * @property list<Shapes\VolumeInfo> $VolumeInfos
 */
class ListVolumesResponse extends Response
{
}
