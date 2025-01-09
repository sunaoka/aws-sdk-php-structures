<?php

namespace Sunaoka\Aws\Structures\Appflow\StopFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $flowArn
 * @property 'Active'|'Deprecated'|'Deleted'|'Draft'|'Errored'|'Suspended' $flowStatus
 */
class StopFlowResponse extends Response
{
}
