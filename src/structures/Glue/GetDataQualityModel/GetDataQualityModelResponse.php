<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $StartedOn
 * @property \Aws\Api\DateTimeResult|null $CompletedOn
 * @property string|null $FailureReason
 */
class GetDataQualityModelResponse extends Response
{
}
