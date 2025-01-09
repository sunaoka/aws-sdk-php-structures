<?php

namespace Sunaoka\Aws\Structures\ConnectCampaignsV2\GetCampaignState;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Initialized'|'Running'|'Paused'|'Stopped'|'Failed'|'Completed' $state
 */
class GetCampaignStateResponse extends Response
{
}
