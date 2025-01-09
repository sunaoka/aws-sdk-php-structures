<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $FailedCount
 * @property int $SuccessCount
 * @property list<Shapes\ImportFindingsError> $FailedFindings
 */
class BatchImportFindingsResponse extends Response
{
}
