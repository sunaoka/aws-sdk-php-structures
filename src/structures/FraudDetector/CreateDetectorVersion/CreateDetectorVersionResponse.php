<?php

namespace Sunaoka\Aws\Structures\FraudDetector\CreateDetectorVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $detectorId
 * @property string|null $detectorVersionId
 * @property 'DRAFT'|'ACTIVE'|'INACTIVE'|null $status
 */
class CreateDetectorVersionResponse extends Response
{
}
