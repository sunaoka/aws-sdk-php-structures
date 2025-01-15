<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDetectorVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $detectorId
 * @property string|null $detectorVersionId
 * @property string|null $description
 * @property list<string>|null $externalModelEndpoints
 * @property list<Shapes\ModelVersion>|null $modelVersions
 * @property list<Shapes\Rule>|null $rules
 * @property 'DRAFT'|'ACTIVE'|'INACTIVE'|null $status
 * @property string|null $lastUpdatedTime
 * @property string|null $createdTime
 * @property 'ALL_MATCHED'|'FIRST_MATCHED'|null $ruleExecutionMode
 * @property string|null $arn
 */
class GetDetectorVersionResponse extends Response
{
}
