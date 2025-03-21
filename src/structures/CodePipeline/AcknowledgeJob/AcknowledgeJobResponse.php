<?php

namespace Sunaoka\Aws\Structures\CodePipeline\AcknowledgeJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Created'|'Queued'|'Dispatched'|'InProgress'|'TimedOut'|'Succeeded'|'Failed'|null $status
 */
class AcknowledgeJobResponse extends Response
{
}
