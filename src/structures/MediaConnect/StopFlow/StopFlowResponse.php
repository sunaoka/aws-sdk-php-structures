<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StopFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FlowArn
 * @property 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR' $Status
 */
class StopFlowResponse extends Response
{
}
