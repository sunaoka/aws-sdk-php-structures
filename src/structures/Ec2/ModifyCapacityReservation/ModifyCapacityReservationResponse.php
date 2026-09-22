<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyCapacityReservation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool|null $Return
 * @property 'requested'|'applied'|'rejected'|null $AdjustmentStatus
 * @property Shapes\CapacityReservationAdjustmentDetails|null $AdjustmentDetails
 */
class ModifyCapacityReservationResponse extends Response
{
}
