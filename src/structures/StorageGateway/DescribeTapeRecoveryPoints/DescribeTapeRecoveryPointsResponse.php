<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeRecoveryPoints;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $GatewayARN
 * @property list<Shapes\TapeRecoveryPointInfo> $TapeRecoveryPointInfos
 * @property string $Marker
 */
class DescribeTapeRecoveryPointsResponse extends Response
{
}
