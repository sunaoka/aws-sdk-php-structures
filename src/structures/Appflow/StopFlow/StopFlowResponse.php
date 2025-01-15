<?php

namespace Sunaoka\Aws\Structures\Appflow\StopFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $flowArn
 * @property 'Active'|'Deprecated'|'Deleted'|'Draft'|'Errored'|'Suspended'|null $flowStatus
 */
class StopFlowResponse extends Response
{
}
