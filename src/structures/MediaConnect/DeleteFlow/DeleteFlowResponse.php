<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeleteFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $FlowArn
 * @property 'STANDBY'|'ACTIVE'|'UPDATING'|'DELETING'|'STARTING'|'STOPPING'|'ERROR' $Status
 */
class DeleteFlowResponse extends Response
{
}
