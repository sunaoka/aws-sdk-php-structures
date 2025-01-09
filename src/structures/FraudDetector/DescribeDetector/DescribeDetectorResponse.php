<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeDetector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $detectorId
 * @property list<Shapes\DetectorVersionSummary> $detectorVersionSummaries
 * @property string $nextToken
 * @property string $arn
 */
class DescribeDetectorResponse extends Response
{
}
