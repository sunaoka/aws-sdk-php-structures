<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\CreateScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $scanName
 * @property string $runId
 * @property Shapes\ResourceId $resourceId
 * @property 'InProgress'|'Successful'|'Failed' $scanState
 * @property string|null $scanNameArn
 */
class CreateScanResponse extends Response
{
}
