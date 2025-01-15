<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeDetector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $detectorId
 * @property list<Shapes\DetectorVersionSummary>|null $detectorVersionSummaries
 * @property string|null $nextToken
 * @property string|null $arn
 */
class DescribeDetectorResponse extends Response
{
}
