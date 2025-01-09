<?php

namespace Sunaoka\Aws\Structures\Glue\GetDataQualityModel;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult $StartedOn
 * @property \Aws\Api\DateTimeResult $CompletedOn
 * @property string $FailureReason
 */
class GetDataQualityModelResponse extends Response
{
}
