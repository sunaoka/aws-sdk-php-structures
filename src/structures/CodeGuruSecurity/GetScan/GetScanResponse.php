<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $scanName
 * @property string $runId
 * @property 'InProgress'|'Successful'|'Failed' $scanState
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'Security'|'All' $analysisType
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property int|null $numberOfRevisions
 * @property string|null $scanNameArn
 * @property string|null $errorMessage
 */
class GetScanResponse extends Response
{
}
