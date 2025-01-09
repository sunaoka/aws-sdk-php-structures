<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateCampaign;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property 'CREATING'|'WAITING_FOR_APPROVAL'|'RUNNING'|'SUSPENDED' $status
 */
class UpdateCampaignResponse extends Response
{
}
