<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\AwsSecurityFindingIdentifier> $ProcessedFindings
 * @property list<Shapes\BatchUpdateFindingsUnprocessedFinding> $UnprocessedFindings
 */
class BatchUpdateFindingsResponse extends Response
{
}
