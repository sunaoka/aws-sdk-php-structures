<?php

namespace Sunaoka\Aws\Structures\Inspector2\StartCodeSecurityScan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $scanId
 * @property 'IN_PROGRESS'|'SUCCESSFUL'|'FAILED'|'SKIPPED'|null $status
 */
class StartCodeSecurityScanResponse extends Response
{
}
