<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StartFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FlowArn
 * @property 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR'|null $Status
 */
class StartFlowResponse extends Response
{
}
