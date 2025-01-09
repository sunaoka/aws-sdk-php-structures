<?php

namespace Sunaoka\Aws\Structures\Appflow\StartFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $flowArn
 * @property 'Active'|'Deprecated'|'Deleted'|'Draft'|'Errored'|'Suspended' $flowStatus
 * @property string $executionId
 */
class StartFlowResponse extends Response
{
}
