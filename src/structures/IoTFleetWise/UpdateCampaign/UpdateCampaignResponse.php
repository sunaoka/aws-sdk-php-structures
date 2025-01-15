<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\UpdateCampaign;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property 'CREATING'|'WAITING_FOR_APPROVAL'|'RUNNING'|'SUSPENDED'|null $status
 */
class UpdateCampaignResponse extends Response
{
}
