<?php

namespace Sunaoka\Aws\Structures\Appflow\StartFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $flowArn
 * @property 'Active'|'Deprecated'|'Deleted'|'Draft'|'Errored'|'Suspended'|null $flowStatus
 * @property string|null $executionId
 */
class StartFlowResponse extends Response
{
}
