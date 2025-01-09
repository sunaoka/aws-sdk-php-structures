<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckNoPublicAccess;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PASS'|'FAIL' $result
 * @property string $message
 * @property list<Shapes\ReasonSummary> $reasons
 */
class CheckNoPublicAccessResponse extends Response
{
}
