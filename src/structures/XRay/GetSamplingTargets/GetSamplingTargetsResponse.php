<?php

namespace Sunaoka\Aws\Structures\XRay\GetSamplingTargets;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SamplingTargetDocument>|null $SamplingTargetDocuments
 * @property \Aws\Api\DateTimeResult|null $LastRuleModification
 * @property list<Shapes\UnprocessedStatistics>|null $UnprocessedStatistics
 */
class GetSamplingTargetsResponse extends Response
{
}
