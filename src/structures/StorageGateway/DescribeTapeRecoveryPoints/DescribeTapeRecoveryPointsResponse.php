<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeRecoveryPoints;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $GatewayARN
 * @property list<Shapes\TapeRecoveryPointInfo>|null $TapeRecoveryPointInfos
 * @property string|null $Marker
 */
class DescribeTapeRecoveryPointsResponse extends Response
{
}
