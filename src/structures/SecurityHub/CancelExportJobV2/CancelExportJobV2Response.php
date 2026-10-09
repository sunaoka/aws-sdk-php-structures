<?php

namespace Sunaoka\Aws\Structures\SecurityHub\CancelExportJobV2;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ExportJobId
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED' $Status
 */
class CancelExportJobV2Response extends Response
{
}
