<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FlowArn
 * @property 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR'|null $Status
 */
class DeleteFlowResponse extends Response
{
}
