<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateDetectorVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $detectorId
 * @property string $detectorVersionId
 * @property 'DRAFT'|'ACTIVE'|'INACTIVE' $status
 */
class CreateDetectorVersionResponse extends Response
{
}
