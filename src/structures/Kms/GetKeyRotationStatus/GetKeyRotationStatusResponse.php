<?php

namespace Sunaoka\Aws\Structures\Kms\GetKeyRotationStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $KeyRotationEnabled
 * @property string $KeyId
 * @property int $RotationPeriodInDays
 * @property \Aws\Api\DateTimeResult $NextRotationDate
 * @property \Aws\Api\DateTimeResult $OnDemandRotationStartDate
 */
class GetKeyRotationStatusResponse extends Response
{
}
