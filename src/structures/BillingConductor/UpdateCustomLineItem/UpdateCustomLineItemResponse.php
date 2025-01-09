<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $BillingGroupArn
 * @property string $Name
 * @property string $Description
 * @property Shapes\ListCustomLineItemChargeDetails $ChargeDetails
 * @property int $LastModifiedTime
 * @property int<0, max> $AssociationSize
 */
class UpdateCustomLineItemResponse extends Response
{
}
