<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\CreateScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\ResourceId $resourceId
 * @property string $runId
 * @property string $scanName
 * @property string $scanNameArn
 * @property 'InProgress'|'Successful'|'Failed' $scanState
 */
class CreateScanResponse extends Response
{
}
