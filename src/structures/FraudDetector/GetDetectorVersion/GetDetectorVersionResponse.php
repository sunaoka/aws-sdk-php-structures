<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDetectorVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $detectorId
 * @property string $detectorVersionId
 * @property string $description
 * @property list<string> $externalModelEndpoints
 * @property list<Shapes\ModelVersion> $modelVersions
 * @property list<Shapes\Rule> $rules
 * @property 'DRAFT'|'ACTIVE'|'INACTIVE' $status
 * @property string $lastUpdatedTime
 * @property string $createdTime
 * @property 'ALL_MATCHED'|'FIRST_MATCHED' $ruleExecutionMode
 * @property string $arn
 */
class GetDetectorVersionResponse extends Response
{
}
