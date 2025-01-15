<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetSegmentEstimate;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainName
 * @property string|null $EstimateId
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|null $Status
 * @property string|null $Estimate
 * @property string|null $Message
 * @property int|null $StatusCode
 */
class GetSegmentEstimateResponse extends Response
{
}
