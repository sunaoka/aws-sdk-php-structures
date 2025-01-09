<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Security'|'All' $analysisType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $errorMessage
 * @property int $numberOfRevisions
 * @property string $runId
 * @property string $scanName
 * @property string $scanNameArn
 * @property 'InProgress'|'Successful'|'Failed' $scanState
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetScanResponse extends Response
{
}
