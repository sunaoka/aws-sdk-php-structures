<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListVolumes;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property string|null $Marker
 * @property list<Shapes\VolumeInfo>|null $VolumeInfos
 */
class ListVolumesResponse extends Response
{
}
