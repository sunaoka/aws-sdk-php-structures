<?php

namespace Sunaoka\Aws\Structures\CodePipeline\AcknowledgeThirdPartyJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Created'|'Queued'|'Dispatched'|'InProgress'|'TimedOut'|'Succeeded'|'Failed'|null $status
 */
class AcknowledgeThirdPartyJobResponse extends Response
{
}
