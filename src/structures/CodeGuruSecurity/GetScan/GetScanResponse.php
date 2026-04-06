<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Security'|'All' $analysisType
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $errorMessage
 * @property int|null $numberOfRevisions
 * @property string $runId
 * @property string $scanName
 * @property string|null $scanNameArn
 * @property 'InProgress'|'Successful'|'Failed' $scanState
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetScanResponse extends Response
{
}
