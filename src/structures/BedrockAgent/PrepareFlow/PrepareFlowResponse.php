<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\PrepareFlow;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $id
 * @property 'Failed'|'Prepared'|'Preparing'|'NotPrepared' $status
 */
class PrepareFlowResponse extends Response
{
}
