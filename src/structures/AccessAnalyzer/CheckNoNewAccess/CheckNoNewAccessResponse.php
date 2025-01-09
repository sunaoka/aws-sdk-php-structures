<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CheckNoNewAccess;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'PASS'|'FAIL' $result
 * @property string $message
 * @property list<Shapes\ReasonSummary> $reasons
 */
class CheckNoNewAccessResponse extends Response
{
}
