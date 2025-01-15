<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StopFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FlowArn
 * @property 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR'|null $Status
 */
class StopFlowResponse extends Response
{
}
