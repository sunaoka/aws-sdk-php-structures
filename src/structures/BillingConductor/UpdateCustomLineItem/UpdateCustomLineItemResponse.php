<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateCustomLineItem;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $BillingGroupArn
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\ListCustomLineItemChargeDetails|null $ChargeDetails
 * @property int|null $LastModifiedTime
 * @property int<0, max>|null $AssociationSize
 */
class UpdateCustomLineItemResponse extends Response
{
}
