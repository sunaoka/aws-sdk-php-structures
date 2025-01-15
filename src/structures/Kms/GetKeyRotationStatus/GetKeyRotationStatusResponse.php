<?php

namespace Sunaoka\Aws\Structures\Kms\GetKeyRotationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $KeyRotationEnabled
 * @property string|null $KeyId
 * @property int<90, 2560>|null $RotationPeriodInDays
 * @property \Aws\Api\DateTimeResult|null $NextRotationDate
 * @property \Aws\Api\DateTimeResult|null $OnDemandRotationStartDate
 */
class GetKeyRotationStatusResponse extends Response
{
}
