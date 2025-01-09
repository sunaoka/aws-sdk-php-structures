<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StartFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FlowArn
 * @property 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR' $Status
 */
class StartFlowResponse extends Response
{
}
