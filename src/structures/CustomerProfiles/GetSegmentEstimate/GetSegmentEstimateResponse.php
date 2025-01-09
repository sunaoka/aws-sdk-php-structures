<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentEstimate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainName
 * @property string $EstimateId
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED' $Status
 * @property string $Estimate
 * @property string $Message
 * @property int $StatusCode
 */
class GetSegmentEstimateResponse extends Response
{
}
